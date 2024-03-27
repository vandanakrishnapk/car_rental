<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
public function show_login()
{
    return view('user.login');
}
public function do_login(Request $request)
{
    $credentials = $request->only('email','password');
    if(Auth::attempt($credentials))
    {
        $request->session()->regenerate();
        return redirect()->route('user.index');
    }
}
public function user_logout()
{
    Auth::logout();
    return redirect()->route('show.login');
}
public function admin_login()
{
    return view('admin.admin_login');
}

public function do_admin_login(Request $request)
{
    $credentials =$request->only('email','password');
    if(Auth::guard('admin')->attempt($credentials)) 
    {
        $request->session()->regenerate();
        return redirect()->route('admin.dash');
    }

}
public function admin_logout()
{
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login');
}

}

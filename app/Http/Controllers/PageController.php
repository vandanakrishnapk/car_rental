<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{

    public function index()
    {
        $car = Car::all();
        return view('user.index',compact('car'));
    }
    public function show_register()
    {
        return view('user.show_register');
    }

    public function admin_dash()
    {
        return view('admin.admin_dash');
    }
    public function admin_profile()
    {
        $data =Auth::guard('admin')->user();
        return view('admin.admin_profile',compact('data'));
    }
    public function car_reg()
    {
        return view('admin.car_reg');
    } 
    public function view_car()
    {
        $car=Car::all();
        return view('admin.view_car',compact('car'));
    }
    public function booknow($id)
    {
        $car_id = Car::find($id);
        Session()->put('car_id',$car_id);
        return view('user.booknow',compact('car_id'));
    }
    public function payment()
    {
        $cars_id = Session()->get('car_id');
        $bookid = Session()->get('data');
        return view('user.payment',compact('cars_id','bookid'));
    }
/*$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get(); */

 public function view_bookings()
 {
    $views = DB::table('bookings')
    ->join('users','bookings.user_id' ,'=','users.id')
    ->join('cars','bookings.car_id','=','cars.car_id')
    ->join('payments','bookings.booking_id','=','payments.booking_id')
    ->select('users.name','users.email','cars.*','payments.status')
    ->get();
    return view('admin.view_bookings',compact('views'));
 }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use App\Models\Car;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Support\Facades\Session;
class DatabaseController extends Controller
{
    public function do_user_register(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'password' =>'required|max:8',
        ]);
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('show.register')->with('success',"registered successfully");
    }

    public function do_car(Request $request)
    {
   
        $request->validate([
            'model' =>'required',
            'category' =>'required',         
            'image' =>'required|mimes:jpeg,jpg,png,gif|max:2048',          
            'price' =>'required',         
            'availability' =>'required',           
        ]);
     $data=$request->all();
     $path = 'asset/storage/images/'.$data['image'];
     $fileName =time().$request->file('image')->getClientoriginalName();
     $path = $request->file('image')->storeAs('images',$fileName,'public');
     $datas["image"]='/storage/'.$path;
     $data['image']=$fileName;
     Car::create($data); 
     return redirect()->route('car.reg')->with('success','registered');
    }
    public function car_search(Request $request)
    {
        $searchTerm = $request->input('search');

        $car = Car::where('model', 'like', '%' . $searchTerm . '%')
                    ->orWhere('category', 'like', '%' . $searchTerm . '%')
                    // Add more fields to search here
                    ->get();
    
        return view('user.index', ['car' => $car]);
    
    }

    public function dobook(Request $request)
    {
       $action = $request->input('action');
       if($action==='save')
       {
        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'car_id' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Create a new booking record
       $datas= Booking::create($validatedData);

$data =$datas->booking_id;
Session()->put('data',$data);
        return redirect()->route('payment')->with(['success', 'Booking created successfully!']);
    }
    elseif($action === 'check')
    {
        function isDateRangeAvailable($carId, $startDate, $endDate)
        {
            $existingBooking = Booking::where('car_id', $carId)
                ->where(function ($query) use ($startDate, $endDate) {
                    $query->where('start_date', '<=', $endDate)
                        ->where('end_date', '>=', $startDate);
                })
                ->exists();
        
            return !$existingBooking;
        }
$startDate = $request->start_date;
$endDate = $request->end_date;
$carId = $request->car_id;
$check = isDateRangeAvailable($carId, $startDate, $endDate);
     


if($check)
{
    echo '<script>alert("available");window.location.href="/booknow"</script>';
    
}
else 
{
    echo '<script>alert("unavailable");window.location.href="/booknow"</script>';
   
}



    }
}


    public function dopay(Request $request)
    {
        
            $request->validate([
                'user_id' => 'required',
                'car_id' => 'required',
                'booking_id' =>'required',
                'price' =>'required',
                'payment_method' =>'required',
            ]);
    
       $data = $request->all();
      
       $data['status'] ="paid";
       Payment::create($data);

    
            return redirect()->route('user.index')->with('success', 'Payment created successfully');
        } 
    
}

@extends('admin.admin_dash')
@section('content')
<table class="table table-dark mt-5 table-hover table-bordered">
    <tr>
        <th>customer_name</th>
        <th>email</th>
        <th>Model</th>
        <th>Category</th>
        <th>price</th>
        <th>image</th>
        <th>payment_status</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($views as $view)
    <tr>
        <td> {{ $view->name }}</td>
        <td> {{ $view->email }}</td>
        <td> {{ $view->model }}</td>
        <td> {{ $view->category }}</td>
        <td> {{ $view->price }}</td>
        <td><img src="{{asset('storage/images/'.$view->image)}}"  alt="" height="50px" width="50px"><br></td>
        <td class="text-center"> {{ $view->status }}</td>
        <td>
         
            <button class="btn btn-primary btn-sm me-2">Send_notification</button>
           
        
    </td>
    </tr>
    @endforeach
</table>
@endsection
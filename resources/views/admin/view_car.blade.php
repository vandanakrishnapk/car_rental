@extends('admin.admin_dash')
@section('contents')

@foreach($car as $cars)
<div class="card mt-2 mx-1 w-25 text-center"> <div class="card-body">
<img src="{{asset('storage/images/'.$cars->image)}}"  alt="" height="150px" width="150px"><br>
<strong>Model :{{ $cars->model }}</strong><br>
<strong> Category:{{ $cars->category }}</strong><br>
<strong>Price:{{ $cars->price }}/- per day</strong>
    </div>
</div>
@endforeach





@endsection
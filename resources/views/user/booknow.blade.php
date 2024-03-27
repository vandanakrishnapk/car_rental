@extends('user.main')
@section('content')
<form method="POST" action="{{ route('do.book') }}">
    @csrf
   
    
   <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
   
    <input type="hidden"  name="car_id" value="{{ $car_id->car_id }}" class="form-control">

    <label for="start_date">Start Date:</label>
    <input type="datetime-local" id="start_date" name="start_date" class="form-control">

    <label for="end_date">End Date:</label>
    <input type="datetime-local" id="end_date" name="end_date" class="form-control">

    <button type="submit" class="btn btn-primary mt-2" name="action" value="save">Book_now</button>
    <button type="submit" class="btn btn-danger" name="action" value="check">check_availability</button>
</form>

@endsection
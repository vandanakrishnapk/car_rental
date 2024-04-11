@extends('user.main')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div  style="background-color:orange;color:white" class="mt-5 p-2 rounded">

<form action="{{ route('do.user_register') }}" method="POST" id="user_form">
    @csrf 
    <label for="">Enter name</label>
    <input type="text" name="name" class="form-control" id="name">
  
    <label for="">Enter email</label>
    <input type="email" name="email" class="form-control" id="email">
 
    <label for="">Enter password</label>
    <input type="password" name="password" class="form-control" id="password"> <!-- added id="password" -->

    <input type="submit" class="btn btn-primary mt-2 mx-5" value="Register" id="submit">
</form>
</div>
@endsection


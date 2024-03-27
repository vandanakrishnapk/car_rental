@extends('user.main')
@section('content')
<div class="login p-2 rounded mt-5" style="background-color:orange;color:white;text-align:center">
<form action="{{ route('do.login') }}" method="POST">
    @csrf 
    <h2 style="color:white;text-align:center">Login</h2>
    <label for="">Email</label>
    <input type="email" name="email" class="form-control">
    <label for="">Password</label>
    <input type="password" name="password" class="form-control">
    <input type="submit" class="btn btn-primary btn-sm mt-2 mx-2" value="Login">
</form>
</div>

@endsection
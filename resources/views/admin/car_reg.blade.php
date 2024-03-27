@extends('admin.admin_dash')
@section('content')
<div class="conatiner">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 mt-5 bg-success opacity-75 w-100 p-3 rounded text-warning">
        @if(session('success'))

<div class="alert alert-success">
    {!! session('success') !!}
</div>


@endif

            <h2 class="text-light text-center">Register car..</h2>
            <form action="{{ route('do.car') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Car model</label>
                <input type="text" name="model" class="form-control"><br>
                <label for="">category</label>
                <input type="text" name="category" class="form-control"><br>
                <label for="">image</label>
                <input type="file" name="image" class="form-control form-control-sm"><br>
                <label for="">Price</label>
                <input type="text" name="price" class="form-control">
                <input type="hidden" name="availability" value="true">
              <button type="submit" class="btn btn-primary">submit</button>
                
            </form>
        </div>
    </div>
</div>
@endsection
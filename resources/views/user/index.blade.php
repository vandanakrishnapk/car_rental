<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-secondary"> 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcSypNof2aAJCBdG6ONuBDGztFbIxXAUpG7BcSmcnNZsMMv317vBHpWUbzlNyIJmLKrrWwK_niLMTnR2YqC4WLSai4Tn0nBKhm2rVqInxeoqkmLY9OxgQpaleQ&usqp=CAE" height="60px" width="60px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item mx-5">
          <a class="btn btn-warning btn-sm" aria-current="page" href="/">Home</a>
        </li>
      <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary  btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Login
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="{{ route('show.login') }}">user</a></li>
    <hr>
    <li><a class="dropdown-item" href="{{ route('admin.login') }}">Admin</a></li>

  </ul>
</div>
        <li class="nav-item mx-5">
          <a class=" btn btn-danger btn-sm" href="{{ route('show.register') }}">Register</a>
        </li>   
        <li class="nav-item dropdown px-5 float-end">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
          @if(Auth::check()) 
          {{ Auth::user()->name }}
          @endif
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item px-5">
            <a href=" {{ route('user.logout') }}" class="nav-link" style="text-decoration:none;">Logout</a>
            </li>
            
          </ul>
        </li>
      </ul>  
      <form class="d-flex" action="{{ route('car.search') }}" role="search" method="GET">
        <input class="form-control me-2" type="search"  name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>  
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-4">
            @yield('content')
     
        </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex flex-wrap">
      @foreach($car as $cars)
<div class="card mt-2 mx-3 w-25 text-center p-2"> <div class="card-body">
<img src="{{asset('storage/images/'.$cars->image)}}"  alt="" height="150px" width="150px"><br>
<strong>Model :{{ $cars->model }}</strong><br>
<strong> Category:{{ $cars->category }}</strong><br>
<strong>Price:{{ $cars->price }}/- per day</strong>
<a href="{{ route('booknow',$cars->car_id) }}" class="btn btn-warning">book now</a>

    </div>
</div>
@endforeach
      </div>
    </div>
</div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item px-5">
          <a class="nav-link active" aria-current="page" href="/admin_dash">Home</a>
        </li>
        <li class="nav-item dropdown px-5">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Car
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item p-1">
            <a href=" {{ route('car.reg') }}" class="nav-link" style="text-decoration:none;">register</a>
            </li>
            <hr>
          <li class="nav-item p-1">
          <a class="nav-link" aria-disabled="true" style="text-decoration:none;" href="{{ route('view.car')  }}">view</a>
        </li>
</ul>
</li>
       
        <li class="nav-item dropdown px-5">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::guard('admin')->name }}
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item px-5">
            <a href=" {{ route('admin.profile') }}" class="nav-link" style="text-decoration:none;">profile</a>
            </li>
            <hr>
          <li class="nav-item px-5">
          <a class="nav-link" aria-disabled="true" style="text-decoration:none;" href="{{ route('admin.logout') }}">Logout</a>
        </li>
          </ul>
        </li>
        <li class="nav-item px-5">
          <a class="nav-link active" aria-current="page" href="{{ route('view.bookings') }}">Bookings</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container">
  <div class="row">
   
    <div class="col-4">
      @yield('content')
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 d-flex flex-wrap">
      @yield('contents')
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
<style>
    body 
    {
        background-color:black;
    }
</style>
</head>
  <body>
 

<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-3 bg-secondary p-2 text-light" style="margin-top:250px">
            <form action="{{ route('do.admin_login') }}" method="POST">
                @csrf
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
                <input type="submit" class="btn btn-dark mx-5 mt-2" value="Login">
            </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Home Page</h1>
        <div class="row">
            <div class="col">
               <a href="{{route('login')}}" class="btn btn-primary">Login</a>
               <a href="{{route('register')}}" class="btn btn-success">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
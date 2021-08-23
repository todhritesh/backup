<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand">Result</a>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">View Result</a></li>
                <li class="nav-item"><a href="{{route('insert')}}" class="nav-link">Insert</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row mt-3">
            @section("sidebar")
            @show

            @section("content")
            @show
        </div>
    </div>
</body>
</html>
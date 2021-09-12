<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bazaar</title>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
        <div class="container">
            <a href="" class="navbar-brand">Bazar</a>
            @livewire("search-input",["data"=>"iii"])

            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">HOme</a></li>
                @auth
                    <li class="nav-item"><a href="" class="nav-link">{{Auth::user()->name}}</a></li>
                    <li class="nav-item">
                        <form action="{{route("logout")}}" method="post">
                            @csrf
                            <input type="submit" value="Logout" class="btn btn-danger">
                        </form>
                    </li>
                @endauth

                @guest
                    <li class="nav-item"><a href="{{route("login")}}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{route("register")}}" class="nav-link">Signup</a></li>
                @endguest
                <li class="nav-item"><a href="" class="btn  btn-outline-light position-relative">
                    Cart <i class="bi bi-cart4 "></i>
                    <span class="position-absolute start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </a></li>
            </ul>
        </div>
    </nav>

    @section("content")
        @show
</body>
</html>

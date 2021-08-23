<div>
    <div class="navbar navbar-expand-lg bg-dark bg-gradient navbar-dark">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand">{{$logo}}</a>

            <form action="{{route('search')}}" class="d-flex">
                <input size="50" type="text" name="search" class="form-control">
                <input type="submit" value="Search" name="find" class="btn btn-info bg-gradient">
            </form>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                @if(session()->has("login"))
                    <li class="nav-item"><a href="{{route("insert")}}" class="btn btn-success ms-3">Insert</a></li>
                    <li class="nav-item"><a href="{{route("logout")}}" class="btn btn-danger ms-3">Logout</a></li>
                @else
                    <li class="nav-item"><a href="{{route("login")}}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{route("register")}}" class="nav-link">Register</a></li>
                @endif
            </ul>

        </div>
    </div>
</div>

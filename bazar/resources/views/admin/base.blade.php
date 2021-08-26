<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bazaar Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="alert-info">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Bazar Admin</a>
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-1 sticky-top">
        <div class="container">
            <ul class="navbar-nav row text-nowrap justify-content-center mx-auto">
                <li class="col nav-item"><a href="{{route("admin.index")}}" class="nav-link">Home</a></li>
                <li class="col nav-item"><a href="{{route("admin.product")}}" class="nav-link">Product Management</a></li>
                <li class="col nav-item"><a href="{{route("admin.product.insert")}}" class="nav-link">Insert Product</a></li>
                <li class="col nav-item"><a href="{{route("admin.order")}}" class="nav-link">Orders</a></li>
                <li class="col nav-item"><a href="{{route("admin.address")}}" class="nav-link">Addresses</a></li>
                <li class="col nav-item"><a href="{{route("admin.coupon")}}" class="nav-link">Coupons</a></li>
                <li class="col nav-item"><a href="{{route("admin.category")}}" class="nav-link">Categories</a></li>
                <li class="col nav-item"><a href="{{route("admin.users")}}" class="nav-link">Users</a></li>
                <li class="col nav-item"><a href="{{route("admin.product")}}" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>


    @section("content")
        @show


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

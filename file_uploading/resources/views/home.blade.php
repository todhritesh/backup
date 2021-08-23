<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("insert")}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" class="form-control">
        <input type="submit" class="btn btn-success">
    </form>
    <img src="{{asset('files/').$data->name}}" alt="">

</body>
</html>

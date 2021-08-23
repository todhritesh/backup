<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>contact</th>
        </tr>
        <tr>
            <td>{{$details->id}}</td>
            <td>{{$details->name}}</td>
            <td>{{$details->email}}</td>
            <td>{{$details->phone->contact}}</td>
        </tr>
    </table>
</body>
</html>
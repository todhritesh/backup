@extends('base')


@section('content')
    
<div class="container">
    <table class="table">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>School_name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>roll_code</th>
            <th>maths</th>
            <th>hindi</th>
            <th>eng</th>
            <th>sst</th>
            <th>sci</th>
            <th>action</th>
        </tr>
        @foreach ($users as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->student->school}}</td>
                <td>{{$u->student->address}}</td>
                <td>{{$u->student->contact}}</td>
                <td>{{$u->student->roll_code}}</td>
                <td>{{$u->marks->maths}}</td>
                <td>{{$u->marks->hindi}}</td>
                <td>{{$u->marks->eng}}</td>
                <td>{{$u->marks->sst}}</td>
                <td>{{$u->marks->sci}}</td>
                <td><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table>
</div>


@endsection
@extends("base")

@section("title","Home")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>Roll_code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>School</th>
                        <th>Contact</th>
                        <th>English</th>
                        <th>HIndi</th>
                        <th>Maths</th>
                        <th>Science</th>
                        <th>Sst</th>
                    </tr>

                    @foreach ($data as $d)
                        <tr>
                            <td>{{$d->joinStudent->roll_code}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->joinStudent->school}}</td>
                            <td>{{$d->joinStudent->contact}}</td>
                            <td>{{$d->mark->eng}}</td>
                            <td>{{$d->mark->hin}}</td>
                            <td>{{$d->mark->math}}</td>
                            <td>{{$d->mark->sci}}</td>
                            <td>{{$d->mark->sst}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

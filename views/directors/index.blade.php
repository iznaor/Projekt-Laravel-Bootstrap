@extends('app')

@section('content')
<table class="table table-warning table-striped">
    <tr class="table-dark">
        <th>Director id</th>
        <th>First name</th>
        <th>Last name</th>
    </tr>
    @foreach($directors as $director)
        <tr>
            <td>{{$director->director_id}}</td>
            <td>{{$director->first_name}}</td>
            <td>{{$director->last_name}}</td>
        </tr>
    @endforeach
</table>

@endsection
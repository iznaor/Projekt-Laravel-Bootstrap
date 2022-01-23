@extends('app')

@section('content')
<table class="table table-info table-striped">
    <tr class="table-dark">
        <th>Producer id</th>
        <th>First name</th>
        <th>Last name</th>
    </tr>
    @foreach($producers as $producer)
        <tr>
            <td>{{$producer->producer_id}}</td>
            <td>{{$producer->first_name}}</td>
            <td>{{$producer->last_name}}</td>
        </tr>
    @endforeach
</table>

@endsection
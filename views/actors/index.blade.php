@extends('app')

@section('content')

<table class="table table-danger table-striped">
    <tr class="table-dark">
        <th>Actor id</th>
        <th>First name</th>
        <th>Last name</th>
    </tr>
    @foreach($actors as $actor)
        <tr>
            <td>{{$actor->actor_id}}</td>
            <td>{{$actor->first_name}}</td>
            <td>{{$actor->last_name}}</td>
        </tr>
    @endforeach
</table>

@endsection

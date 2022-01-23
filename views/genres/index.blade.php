@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
        <th>Genre id</th>
        <th>Genre name</th>
    </tr>
    @foreach($genres as $genre)
        <tr>
            <td>{{$genre->genre_id}}</td>
            <td>{{$genre->genre_name}}</td>
        </tr>
    @endforeach
</table>

@endsection
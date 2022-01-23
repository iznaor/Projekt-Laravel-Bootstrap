@extends('app')

@section('content')
<table class="table">
    <tr class="table-dark">
        <th>Movie id</th>
        <th>Movie title</th>
        <th>Movie release year</th>
        <th>Movie runtime minutes</th>
        <th>IMDb rating</th>
        <th>Metascore rating</th>
        <a class="btn btn-outline-success position-absolute top-0 end-0" href="{{ url('/moviesAdd  ') }}">Add Movie</a>

    </tr>
    @foreach($movies as $movie)
        <tr>
            <td>{{$movie->movie_id}}</td>
            <td>{{$movie->movie_title}}</td>
            <td>{{$movie->movie_release_year}}</td>
            <td>{{$movie->movie_runtime_minutes}}</td>
            <td>{{$movie->imdb_rating}}</td>
            <td>{{$movie->metascore_rating}}</td>
            <td>
                <a class="btn btn-outline-primary" href="{{ url('/moviesEdit  ') }}">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('movies.destroy', ['movie' => $movie->movie_id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection
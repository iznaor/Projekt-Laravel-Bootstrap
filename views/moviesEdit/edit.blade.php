@extends('app')

@section('content')
<table class="table table-success table-striped">
<h1>Edit Movie</h1>

<form method="post" action="{{ url('/moviesEdit') }}">
    {{csrf_field()}}

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputMovieTitle">Movie title</label>
      <input type="Movie Title" name="movie_title" class="form-control" id="inputMovieTitle" placeholder="Movie Title">
    </div>
    <div class="form-group col-md-6">
      <label for="inputMoviereleaseyear	">Movie release year</label>
      <input type="Movie release year" name="movie_release_year" class="form-control" id="inputMoviereleaseyear" placeholder="Movie release year">
    </div>
  </div>
  <div class="form-group col-md-6"">
    <label for="inputMovie runtime minutes">Movie runtime minutes</label>
    <input type="text" name="movie_runtime_minutes" class="form-control" id="inputMovieruntimeminutes" placeholder="Movie runtime minutes">
  </div>
  <div class="form-group col-md-6"">
    <label for="inputIMDbrating">IMDb rating</label>
    <input type="text" name="imdb_rating" class="form-control" id="inputIMDbrating" placeholder="IMDb rating">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Metascore rating">Metascore rating</label>
      <input type="text" name="metascore_rating" class="form-control" id="inputMetascorerating" placeholder="Metascore rating">
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-success">Submit</button>
</form>

</table>

@endsection
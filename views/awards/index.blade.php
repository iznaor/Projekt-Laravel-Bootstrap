@extends('app')

@section('content')
<table class="table table-primary table-striped">
    <tr class="table-dark">
        <th>Award id</th>
        <th>Oscar</th>
        <th>Golden globe</th>
    </tr>
    @foreach($awards as $award)
        <tr>
            <td>{{$award->award_id}}</td>
            <td>{{$award->oscar}}</td>
            <td>{{$award->golden_globe}}</td>
        </tr>
    @endforeach
</table>

@endsection
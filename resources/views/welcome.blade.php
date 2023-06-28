@extends('layouts.app')

@section('content')

<div class="container my-3">

    <div class="flex">
        @foreach ($movies as $movie)

            <div class="miaCard">
                <h3>   {{$movie->title}}</h3>
                <h5>   {{$movie->original_title}}</h5>
                <p>    {{$movie->nationality}}</p>
                <small>{{$movie->date}} </small> <br>
                <small>vote: {{$movie->vote}}</small>
            </div>
                
        @endforeach
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container my-3">

    @foreach ($movies as $movie)
        <h2>{{$movie}}</h2>
    @endforeach
</div>
@endsection
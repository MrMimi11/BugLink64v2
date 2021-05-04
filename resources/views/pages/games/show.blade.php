@extends('layouts.default')
@section('content')
    <div class="text-center">
        <h1>{{ $game->name }}</h1>
    </div>

    <div class="desc">
        <p>{{ $game->description }}</p>
    </div>

    <div class="row d-flex justify-content-around">
        <a href="{{ route('games.bugs.index', $game->slug) }}">Bugs</a>
        <a href="{{ route('games.speedruns.index', $game->slug) }}">Speedruns</a>
    </div>
    <div class="row d-flex justify-content-around">
            <img src="{{ $game->image }}" alt="">
            <img src="{{ $game->image }}" alt="">
    </div>
@endsection

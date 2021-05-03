@extends('layouts.default')
@section('content')
    <h1>{{ $game->name }}</h1>
    <img src="{{ $game->image }}" alt="">
    <p>{{ $game->description }}</p>
    <a href="{{ route('games.bugs.index', $game->slug) }}">Bugs</a>
    <a href="{{ route('games.speedruns.index', $game->slug) }}">Speedruns</a>
@endsection

@extends('layouts.default')
@section('content')
    <h1>{{ $game->name }}</h1>
    <img src="{{ $game->image }}" alt="">
    <p>{{ $game->description }}</p>
    <ul>
        @foreach($game->speedruns as $speedrun)
            <li><a href="/">{{ $speedrun->name }}</a></li>
        @endforeach
    </ul>
@endsection

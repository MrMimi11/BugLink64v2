@extends('layouts.default')
@section('content')
    <h1 class="text-center">{{ $game->name }}</h1>
    <img src="{{ $game->image }}" alt="">
    <p>{{ $game->description }}</p>
    <ul>
        @foreach($game->bugs as $bug)
            <li><a href="/">{{ $bug->name }}</a></li>
        @endforeach
    </ul>
@endsection

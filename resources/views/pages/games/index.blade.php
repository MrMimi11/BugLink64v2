@extends('layouts.default')
@section('content')
    <ul>
        @foreach($games as $game)
            <li>
                <a href="{{ route('games.show', $game->slug) }}">{{ $game->name }}</a>
                <a style="color: deepskyblue;" href="{{ route('games.edit', $game->slug) }}">Edit</a>
                <a style="color: red;" href="{{ route('games.destroy', $game->slug) }}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection

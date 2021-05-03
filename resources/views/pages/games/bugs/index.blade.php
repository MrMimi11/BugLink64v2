@extends('layouts.default')
@section('content')
    <h1 class="text-center">{{ $game->name }}</h1>
    <a href="{{ route('post.postbug') }}" class="button btn btn-primary">Post a bug</a>
    <img src="{{ $game->image }}" alt="">
    <p>{{ $game->description }}</p>
    <ul>
        @foreach($game->bugs as $bug)
            <li><a href="/">{{ $bug->name }}</a></li>
        @endforeach
    </ul>
@endsection

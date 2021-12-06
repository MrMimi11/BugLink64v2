@extends('layouts.default')
@section('content')

    <div class="title_bug">
        <h1 class="text-center mb-4">{{ $game->name }}</h1>
    </div>

    <div class="title_bug">
        <h2 class="text-center mb-5"><u> {{ $bug->title }}</u></h2>
    </div>

    {{--    <p>{{ $game->description }}</p>--}}
    {{--        <div class="embed-responsive embed-responsive-16by9">--}}
    {{--            <iframe class="embed-responsive-item" src="{{ $bug->video }}" allowfullscreen></iframe>--}}
    {{--        </div>--}}
    {{--    Post a bug and search bar--}}

    <div class="row">
        <div class="d-flex bd-highlight contentbug">
            <div class="mr-4 flex-fill bd-highlight">
                <iframe width="550" height="400" src="{{str_replace('watch?v=', 'embed/', $bug->video) }}" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen class="videobug"></iframe>
                <a href="{{ route('games.bugs.index', $game->slug) }}" class="mt-2 backbug">🡰 Back to the list of
                    bugs</a>
            </div>
            <div class="flex-fill bd-highlight descbug">{{ $bug->description }}</div>
        </div>
    </div>
@endsection

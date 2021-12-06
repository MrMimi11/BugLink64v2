@extends('layouts.default')
@section('content')
    <div class="title">
        <h1 class="text-center">{{ $game->name }}</h1>
    </div>
    {{--    <img src="{{ $game->image }}" alt="">--}}
    <p>{{ $game->description }}</p>

    {{--    Post a bug and search bar--}}
    <div class="row d-flex justify-content-between align-items-center mb-4">
        @auth()
            <div>
                <a href="{{ route('games.bugs.create', $game->slug) }}" class="button btn">Post a bug</a>
            </div>
        @endauth
        <div>
            @include('pages.games.bugs.search')
        </div>
    </div>

    {{--    All categories--}}
    <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @foreach($game->categories as $category)
                @if($category->slug === 'all')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->query('category') === $category->slug ? 'active' : '' }} "
                           href="{{ route('games.bugs.index', $game->slug) }}"
                           aria-selected="true">{{ $category->name }}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ request()->query('category') === $category->slug ? 'active' : '' }} "
                           href="{{ route('games.bugs.index', [$game->slug, 'category=' . $category->slug]) }}"
                           aria-selected="true">{{ $category->name }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    {{--    List of bug--}}
    @foreach($bugs as $bug)
        <div class="border border-dark w-100 mb-3">
            <div class="bugcontentborder d-flex p-3">
                @if($bug->video)
                    <iframe width="150" height="150" src="{{str_replace('watch?v=', 'embed/', $bug->video) }}" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen class="bugofvideo"></iframe>
                @endif
                <div class="ml-3 w-100">
                    <h4>
                        {{ $bug->title }} | {{ $bug->game->name }}
                        @foreach($bug->categories as $cat)
                            {{ $cat->name }}
                        @endforeach
                    </h4>
                    <div>
                        {{  Str::limit($bug->description, 200) }}
                    </div>
                </div>
                <div class="col-2 d-flex allbutton">
                    <a href="{{ route('games.bugs.edit', [$game->slug, $bug->slug]) }}" class="text-white">
                        <button type="button" class="btn mb-3 w-100">Edit</button>
                    </a>
                    {{--                    route défini dans web.php pour supprimer le bug et ça doit prendre en compte l'url du jeu est l'url du bug--}}
                    <a href="{{ route('games.bugs.delete', [$game->slug, $bug->slug]) }}" class="text-white">
                        <button type="button" class="btn mb-3 w-100">Delete</button>
                    </a>
                    <a href="{{ route('games.bugs.show', [$game->slug, $bug->slug]) }}" class="text-white">
                        <button type="button" class="btn w-100">See this bug</button>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection

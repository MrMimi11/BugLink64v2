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

    {{--            <iframe width="300" height="220" src="{{ $bug->video }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}

    {{--            <iframe src="{{ url($bug->video) }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>--}}
    {{--        </div>--}}
    {{--        <video >--}}
    {{--            <source src="{{ $bug->video }}" type="video/mp4" />--}}
    {{--        </video>--}}
    {{--        <iframe width="420" height="345" src="https://www.youtube.com/em/tgbNymZ7vqY"></iframe>--}}
    {{--        <iframe width="400" height="300"--}}
    {{--                src="{{ $bug->video }}" frameborder="0"--}}
    {{--                gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>--}}
    {{--        <iframe width="560" height="315" src="https://www.youtube.com/embed/" {{ $bug->video }} frameborder="0" gesture="media" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}
    {{--        <iframe width="560" height="315" src="{{ $bug->video }}" frameborder="0" gesture="media" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}

    {{--        <embed src="{{ $bug->video }}" quality="medium"--}}
    {{--               bgcolor="#ffffff" width="550" height="400"--}}
    {{--               name="whoosh" align="middle" allowScriptAccess="sameDomain"--}}
    {{--               allowFullScreen="false"--}}
    {{--               pluginspage="http://www.macromedia.com/go/getflashplayer">--}}
    {{--        <object width="425" height="350" data="{{ $bug->video }}" type="application/x-shockwave-flash"><param name="src" value="{{ $bug->video }}" /></object>--}}

    {{--        <iframe src="blob:{{ url($bug->video) }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>--}}
    {{--    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}

    {{--    Post a bug and search bar--}}

    <div class="row">
        <div class="d-flex bd-highlight">
            <div class="mr-4 flex-fill bd-highlight">
                <iframe width="550" height="400" src="{{ $bug->video }}" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <a href="{{ route('games.bugs.index', $game->slug) }}" class="mt-5 backbug">🡰 Back to the list of
                    bugs</a>
            </div>
            <div class="flex-fill bd-highlight descbug">{{ $bug->description }}</div>
        </div>
    </div>
@endsection

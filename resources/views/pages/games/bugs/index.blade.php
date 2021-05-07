@extends('layouts.default')
@section('content')
    <div class="title">
        <h1 class="text-center">{{ $game->name }}</h1>
    </div>
    {{--    <img src="{{ $game->image }}" alt="">--}}
    <p>{{ $game->description }}</p>

    {{--    Post a bug and search bar--}}
    <div class="row d-flex justify-content-between align-items-center mb-4">
        <div>
            <a href="{{ route('games.bugs.create', $game->slug) }}" class="button btn btn-primary">Post a bug</a>
        </div>
        <div>
            @include('pages.games.bugs.search')
        </div>
    </div>

    {{--    All categories--}}
    <div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab"
                   aria-controls="pills-all" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-any-tab" data-toggle="pill" href="#pills-any" role="tab"
                   aria-controls="pills-any" aria-selected="false">Any%</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-onehundred-tab" data-toggle="pill" href="#pills-onehundred" role="tab"
                   aria-controls="pills-onehundred" aria-selected="false">100%</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-glitchless-tab" data-toggle="pill" href="#pills-glitchless" role="tab"
                   aria-controls="pills-glitchless" aria-selected="false">Glitchless</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-alldungeons-tab" data-toggle="pill" href="#pills-alldungeons" role="tab"
                   aria-controls="pills-alldungeons" aria-selected="false">All Dungeons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-gsr-tab" data-toggle="pill" href="#pills-gsr" role="tab"
                   aria-controls="pills-gsr" aria-selected="false">GSR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-mst-tab" data-toggle="pill" href="#pills-mst" role="tab"
                   aria-controls="pills-mst" aria-selected="false">MST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-defeatganon-tab" data-toggle="pill" href="#pills-defeatganon" role="tab"
                   aria-controls="pills-defeatganon" aria-selected="false">Deafeat Ganon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-nowrongwarp-tab" data-toggle="pill" href="#pills-nowrongwarp" role="tab"
                   aria-controls="pills-nowrongwarp" aria-selected="false">No Wrong Warp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-autres-tab" data-toggle="pill" href="#pills-autres" role="tab"
                   aria-controls="pills-autres" aria-selected="false">Autres</a>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
            <div class="desc">All</div>
        </div>
        <div class="tab-pane fade" id="pills-any" role="tabpanel" aria-labelledby="pills-any-tab">Any%</div>
        <div class="tab-pane fade" id="pills-onehundred" role="tabpanel" aria-labelledby="pills-onehundred-tab">
            <div class="desc">100%</div>
        </div>
        <div class="tab-pane fade" id="pills-glitchless" role="tabpanel" aria-labelledby="pills-glitchless-tab">
            <div>glitchless</div>
        </div>
        <div class="tab-pane fade" id="pills-alldungeons" role="tabpanel" aria-labelledby="pills-alldungeons-tab">All
            Dungeons
        </div>
        <div class="tab-pane fade" id="pills-gsr" role="tabpanel" aria-labelledby="pills-gsr-tab">GSR</div>
        <div class="tab-pane fade" id="pills-mst" role="tabpanel" aria-labelledby="pills-mst-tab">Medaillon Stone Trial</div>
        <div class="tab-pane fade" id="pills-defeatganon" role="tabpanel" aria-labelledby="pills-defeatganon-tab">
            Deafeat Ganon
        </div>
        <div class="tab-pane fade" id="pills-nowrongwarp" role="tabpanel" aria-labelledby="pills-nowrongwarp-tab">No
            Wrong Warp
        </div>
        <div class="tab-pane fade" id="pills-autres" role="tabpanel" aria-labelledby="pills-autres-tab">Autres</div>
    </div>

    {{--    List of bug--}}
    @foreach($game->bugs as $bug)
        <div class="border w-100 mb-3">
            <div class="d-flex p-3">
                <iframe width="150" height="150" src="{{ $bug->video . "&output=embed" }}" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="ml-3">
                    <h4>
                       {{ $bug->title }}
                    </h4>
                    <div>
                        {{  \Illuminate\Support\Str::limit($bug->description, 200) }}
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end flex-column">
                    <a href="{{ route('games.bugs.edit', [$game->slug, $bug->slug]) }}" class="text-white"><button type="button" class="btn btn-info mb-3 w-100">Edit</button></a>
                    <a href="{{ route('games.bugs.delete', [$game->slug, $bug->slug]) }}" class="text-white"><button type="button" class="btn btn-info mb-3 w-100">Delete</button></a>
                    <a href="{{ route('games.bugs.show', [$game->slug, $bug->slug]) }}" class="text-white"><button type="button" class="btn btn-info w-100">See this bug</button></a>
                </div>
            </div>
        </div>
    @endforeach
@endsection

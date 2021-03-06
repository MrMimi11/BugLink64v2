@extends('layouts.default')
@section('content')
    <h1 class="text-center">{{ $game->name }}</h1>
    {{--    <img src="{{ $game->image }}" alt="">--}}
    <p>{{ $game->description }}</p>

    {{--    Post a speedrun--}}
    <div class="row">
        <div class="d-flex justify-content-end w-100">
            <a href="{{ route('post.postbug') }}" class="button btn btn-primary">Post a speedrun of you</a>
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
        <div class="tab-pane fade" id="pills-glitchless" role="tabpanel" aria-labelledby="pills-glitchless-tab">
            <div class="descglitchless">glitchless</div>
        </div>
        <div class="tab-pane fade" id="pills-onehundred" role="tabpanel" aria-labelledby="pills-onehundred-tab">
            <div class="row">
                <div class="nosrmorsrm">
                    <a href="#nosrm" class="btn btn-outline-primary">No SRM</a>
                    <a href="#srm" class="btn btn-outline-primary">SRM</a>
                </div>
            </div>
            <div class="desconehundred">100%</div>
        </div>
        <div class="tab-pane fade" id="pills-alldungeons" role="tabpanel" aria-labelledby="pills-alldungeons-tab">
            <div class="row">
                <div class="nosmrorsrm">
                    <a href="#nosrm" class="btn btn-outline-primary">No SRM</a>
                    <a href="#srm" class="btn btn-outline-primary">SRM</a>
                </div>
            </div>
            <div class="descalldungeons"> All dungeons blabla</div>
        </div>
        <div class="tab-pane fade" id="pills-gsr" role="tabpanel" aria-labelledby="pills-gsr-tab">GSR</div>
        <div class="tab-pane fade" id="pills-mst" role="tabpanel" aria-labelledby="pills-mst-tab">MST</div>
        <div class="tab-pane fade" id="pills-defeatganon" role="tabpanel" aria-labelledby="pills-defeatganon-tab">
            <div class="row">
                <div class="nosrmorsrm">
                    <a href="#nosrm" class="btn btn-outline-primary">No SRM</a>
                    <a href="#srm" class="btn btn-outline-primary">SRM</a>
                </div>
            </div>
            <div class="descdefeatganon">description defeat ganon</div>
        </div>
        <div class="tab-pane fade" id="pills-nowrongwarp" role="tabpanel" aria-labelledby="pills-nowrongwarp-tab">
            <div class="row">
                <div class="nosrmorsrm">
                    <a href="#nosrm" class="btn btn-outline-primary">No SRM</a>
                    <a href="#srm" class="btn btn-outline-primary">SRM</a>
                </div>
            </div>
            <div class="descnowrongwarp"> blabla wrap x)</div>
        </div>
        <div class="tab-pane fade" id="pills-autres" role="tabpanel" aria-labelledby="pills-autres-tab">Autres</div>
    </div>

{{--    List of speedrun--}}
    <ul>
        @foreach($game->speedruns as $speedrun)
            <li><a href="/">{{ $speedrun->name }}</a></li>
        @endforeach
    </ul>
@endsection

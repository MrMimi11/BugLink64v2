@extends('layouts.default')
@section('content')
    {{ debug(session('errors')) }}
    <h2 class="text-center">Post a bug</h2>
    <form action="{{ route('games.bugs.store', [$game->slug, $bug->slug]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" autofocus>
        </div>
        @error('title')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="7"></textarea>
        </div>
        @error('description')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" name="video" class="form-control" id="video">
        </div>
        @error('video')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <br>

        {{--        Select categories--}}
        <div class="chosecategories">
            <label for="categories">Select a categorie(s)</label>
        </div>
        <div class="row d-flex justify-content-around flex-column ml-1">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="any" title="Any%" name="checkbox">
                <label class="form-check-label" for="any">Any%</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="onehundred" title="100%" name="checkbox">
                <label class="form-check-label" for="onehundred">100%</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="glitchless" title="glitchless" name="checkbox">
                <label class="form-check-label" for="glitchless">Glitchless</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="alldungeons" name="checkbox">
                <label class="form-check-label" for="alldungeons">All Dungeons</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="gsr" name="checkbox">
                <label class="form-check-label" for="gsr">GSR</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="mst" name="checkbox">
                <label class="form-check-label" for="mst">MST</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="defeatganon" name="checkbox">
                <label class="form-check-label" for="defeatganon">Defeat Ganon</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="nowrongwarp" name="checkbox">
                <label class="form-check-label" for="nowrongwarp">No Wrong Warp</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="autres" name="checkbox">
                <label class="form-check-label" for="autres">Autres</label>
            </div>
            @error('checkbox')
            <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button class="btn btn-primary float-right mt-4" type="submit">Envoyer</button>
    </form>
@endsection

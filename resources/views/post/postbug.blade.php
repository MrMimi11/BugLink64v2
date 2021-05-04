@extends('layouts.default')
@section('content')
    <h2 class="text-center">Poster un bug</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre">
        </div>
        @error('titre')
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
            <input type="text" class="form-control" id="video">
        </div>
        @error('video')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <br>
        <div class="chosecategories">
            <label for="categories">Select a categorie(s)</label>
        </div>
        <div class="row d-flex justify-content-around">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="any">
                <label class="form-check-label" for="any">Any%</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="onehundred">
                <label class="form-check-label" for="onehundred">100%</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="glitchless">
                <label class="form-check-label" for="glitchless">Glitchless</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="alldungeons">
                <label class="form-check-label" for="alldungeons">All Dungeons</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="gsr">
                <label class="form-check-label" for="gsr">GSR</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="mst">
                <label class="form-check-label" for="mst">MST</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="defeatganon">
                <label class="form-check-label" for="defeatganon">Defeat Ganon</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="nowrongwarp">
                <label class="form-check-label" for="nowrongwarp">No Wrong Warp</label>
            </div>  <div class="form-check">
                <input type="checkbox" class="form-check-input" id="autres">
                <label class="form-check-label" for="autres">Autres</label>
            </div>
        </div>

        <button class="btn btn-primary float-right" type="submit">Envoyer</button>
    </form>
@endsection

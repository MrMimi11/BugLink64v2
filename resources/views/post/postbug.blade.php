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
        <button class="btn btn-primary float-right" type="submit">Envoyer</button>
    </form>
@endsection

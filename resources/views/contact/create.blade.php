@extends('layouts.default')
@section('content')
    <h2 class="text-center">Me contacter</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo">
        </div>
        @error('pseudo')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="title">Objet</label>
            <input type="text" class="form-control" id="title">
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
        <br>
        <button class="btn btn-primary float-right" type="submit">Envoyer</button>
    </form>
@endsection

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


            @foreach($categories as $category)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="{{ $category->id }}" title="{{ $category->name }}" value="{{ $category->id }}" name="categories[]">
                    <label class="form-check-label" for="{{ $category->id }}">{{ $category->name }}</label>
                </div>
                @endforeach
            @error('checkbox')
            <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button class="btn float-right mt-4" type="submit">Envoyer</button>
    </form>
@endsection

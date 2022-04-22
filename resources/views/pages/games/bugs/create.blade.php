@extends('layouts.default')
@section('content')
    {{ debug(session('errors')) }}
    <h2 class="text-center">Post a bug</h2>
{{--    Action quand on va cliquer et en method post pour cacher dans l'url--}}
    <form action="{{ route('games.bugs.store', [$game->slug, $bug->slug]) }}" method="post"
          enctype="multipart/form-data">
        @csrf
{{--    Début des champs--}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" autofocus>
        </div>
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Title » est vide, cela entraîne un message d’erreur.--}}
        @error('title')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="description">Description (in english)</label>
            <textarea name="description" class="form-control" id="description" rows="7"></textarea>
        </div>
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Description » est vide, cela entraîne un message d’erreur.--}}
        @error('description')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="video">Video (only links from youtube) and In English or French (if there is a good description)</label>
            <input type="text" name="video" class="form-control" id="video">
        </div>
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Video » est vide, cela entraîne un message d’erreur.--}}
        @error('video')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror

        {{--        Select categories--}}
        <div class="chosecategories">
            <label for="categories">Select a categorie(s)</label>
        </div>
        <div class="row d-flex justify-content-around flex-column ml-1">
{{--            On va faire une boucle pour lister tous les noms des catégories qui se trouvent dans la base de données--}}
            @foreach($game->categories as $category)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="{{ $category->id }}"
                           title="{{ $category->name }}" value="{{ $category->id }}" @if($category->slug === 'all') checked disabled="disabled" @endif name="categories[]">
                    <label class="form-check-label" for="{{ $category->id }}">{{ $category->name }}</label>
                </div>
            @endforeach
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Select a categorie(s) » est vide, cela entraîne un message d’erreur.--}}
            @error('categories')
            <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="d-flex justify-content-end message_validation">
            New bugs will be visible after validation by the administrator
        </div>

        <button class="btn float-right mt-3" type="submit">Send</button>
    </form>
@endsection

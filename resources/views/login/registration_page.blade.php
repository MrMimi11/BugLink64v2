@extends('layouts.default')
@section('content')
    <h2 class="text-center">Create account</h2>
    {{--    Action quand on va cliquer et en method post pour cacher dans l'url--}}
    <form action="{{ route('registration.store') }}" method="post">
        @csrf
        @dump(session('errors'))
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pseudo">
        </div>
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Pseudo » est vide, cela entraîne un message d’erreur.--}}
        @error('pseudo')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Email » est vide, cela entraîne un message d’erreur.--}}
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Password » est vide, cela entraîne un message d’erreur.--}}
        @error('password')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
        </div>
{{--     Le @error cherche s’il y a une clé error dans la session et affiche la valeur de la clé. Si le champ « Confirm Password » est vide, cela entraîne un message d’erreur.--}}
        @error('password_confirmation')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div>
            <button class="btn float-right" type="submit">Register</button>
        </div>
    </form>
@endsection

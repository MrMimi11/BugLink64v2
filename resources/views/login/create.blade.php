@extends('layouts.default')
@section('content')
    <h2 class="text-center">S'inscrire</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" placeholder="Pseudo">
        </div>
        @error('pseudo')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        @error('password')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <br>
        <button class="btn btn-primary float-right" type="submit">S'inscrire</button>
    </form>
@endsection

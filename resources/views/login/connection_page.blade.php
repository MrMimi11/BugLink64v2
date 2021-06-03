@extends('layouts.default')
@section('content')
    <h2 class="text-center">S'inscrire</h2>
    <form action="{{ route('connection') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        @error('password')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        @include('flash.flash')
        <div>
            <button class="btn float-right" type="submit">S'inscrire</button>
        </div>
    </form>
@endsection

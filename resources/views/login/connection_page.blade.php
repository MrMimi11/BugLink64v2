@extends('layouts.default')
@section('content')
    <h2 class="text-center">Log in</h2>
    <form action="{{ route('connection') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
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
            <button class="btn float-right" type="submit">Log in</button>
        </div>
    </form>
    <div>
        <p>You don't have an account? <a href="{{ route('registration.index') }}">Created in one</a></p>
        <p>Forgot your password? <a href="{{ route('forgot.show') }}">Reset</a></p>
    </div>
@endsection

@extends('layouts.default')

@section('content')
    <h2>Profile</h2>
    @dump(session('errors'))
    <form action="{{ route('profile.update') }}" method="post">
{{--        change pseudo and email--}}
        @csrf
        <input type="text" name="pseudo" value="{{ auth()->user()->pseudo }}" placeholder="Current nickname">
        @error('pseudo')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror

        <input type="text" name="email" value="{{ auth()->user()->email }}" placeholder="Current email">
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror

        <button type="submit">Edit</button>
    </form>
    <form action="{{ route('profile.password.update') }}" method="post">
        @csrf
        <input type="password" name="current_password" placeholder="Current password">
        @error('current_password')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <input type="password" name="new_password" placeholder="New Password">
        @error('new_password')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <input type="password" name="new_password_confirmation" placeholder="Confirm new Password">
        @error('new_password_confirmation')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <button type="submit">Change the password</button>
    </form>
@endsection

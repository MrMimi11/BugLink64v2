@extends('layouts.default')
@section('content')
    <form class="space-y-6" action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <input type="email" name="email" value="{{ request('email') }}" placeholder="Email">
        <input type="text" name="password" placeholder="Password">
        <input type="text" name="password_confirmation" placeholder="Repeat Password">
        <button type="submit">Change password</button>
    </form>
@endsection

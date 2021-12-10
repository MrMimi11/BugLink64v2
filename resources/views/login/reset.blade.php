@extends('layouts.default')
@section('content')
    <form class="space-y-6" action="{{ route('password.update') }}" method="POST">
        @csrf
        <h4 class="mt-3 textresetpassword">Reset your password</h4>
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="d-flex flex-column buttonresetpassword">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ request('email') }}" placeholder="Email" class="form-control" id="email">
            </div>
            @error('email')
            <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" id="password">
            </div>
            @error('password')
            <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
            <div class="form-group">
                <label for="password">Repeat password</label>
                <input type="password" name="password_confirmation" placeholder="Repeat Password" class="form-control" id="password">
            </div>
            @error('password_confirmation')
            <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
            <button class="btn" type="submit">Change password</button>
        </div>
    </form>
@endsection

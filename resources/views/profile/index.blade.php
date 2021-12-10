@extends('layouts.default')

@section('content')
    <h2 class="text-center mt-4">Change profile</h2>
    {{--    @dump(session('errors'))--}}
    <form action="{{ route('profile.update') }}" method="post">
        @csrf
        <div>
            <h5 class="p-3">Change Pseudo or email</h5>
            <div class="d-flex align-items-baseline justify-content-around flex-column ml-3">
                <div class="form-group">
                    <label for="pseudo">Pseudo:</label>
                    <input type="text" name="pseudo" value="{{ auth()->user()->pseudo }}" placeholder="Current nickname" class="form-control">
                    @error('pseudo')
                    <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{ auth()->user()->email }}" placeholder="Current email" class="form-control">
                    @error('email')
                    <span class="text-danger text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn" type="submit">Edit</button>
            </div>
        </div>
    </form>

    <form action="{{ route('profile.password.update') }}" method="post">
        @csrf
        <div class="bg-transparent border-0">
            <h5 class="p-3">Change password</h5>
            {{--            align-items-baseline justify-content-around--}}
            <div class="d-flex justify-content-between flex-wrap flex-column ml-3">
                <label for="pseudo">Current password:</label>
                <input type="password" name="current_password" placeholder="Current password" class="form-control changepassword">
                @error('current_password')
                <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
                <label for="pseudo">New password:</label>
                <input type="password" name="new_password" placeholder="New Password" class="form-control changepassword">
                @error('new_password')
                <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
                <label for="pseudo">Confirm new password:</label>
                <input type="password" name="new_password_confirmation" placeholder="Confirm new Password" class="form-control changepassword">
                @error('new_password_confirmation')
                <span class="text-danger text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn buttonchangepassword mt-2 ml-3" type="submit">Change the password</button>
        </div>
    </form>

@endsection

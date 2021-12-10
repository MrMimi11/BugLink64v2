@extends('layouts.default')
@section('content')
    <form action="{{ route('forgot.send') }}" method="post">
        @csrf
        <div class="mt-4">
            <h4 class="text-center">Forgot your password</h4>
            <label for="email">Email</label>
            <div class="d-flex">
                <input type="email" class="form-control w-50" id="email" placeholder="Email" name="email">
                <button class="btn ml-2" type="submit">Send Reset Link</button>
            </div>
        </div>
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror

    </form>
@endsection

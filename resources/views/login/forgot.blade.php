@extends('layouts.default')
@section('content')
    <form action="{{ route('forgot.send') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Send Reset Link</button>
    </form>
@endsection

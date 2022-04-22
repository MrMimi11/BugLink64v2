@extends('layouts.default')
@section('scripts')
    {!! htmlScriptTagJsApi() !!}
@endsection
@section('content')
@include('flash.flash')
    <h2 class="text-center">Contact me</h2>
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="nickname" class="form-control" id="pseudo">
        </div>
        @error('nickname')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email">
        </div>
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="title">Object (in french or english)</label>
            <input type="text" name="object" class="form-control" id="title">
        </div>
        @error('object')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="description">Description (in french or english)</label>
            <textarea name="content" class="form-control" id="description" rows="7"></textarea>
        </div>
        @error('content')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <br>
        {!! htmlFormSnippet() !!}
        @error('g-recaptcha-response')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
        <br>
        <button class="btn float-right" type="submit">Send</button>
    </form>
@endsection

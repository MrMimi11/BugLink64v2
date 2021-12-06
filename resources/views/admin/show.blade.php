@extends('layouts.admin')
@section('content')
    <div class="card">
        <form class="p-3" action="{{ route('admin.bugs.update', $bug) }}" method="post">
            @csrf
            <div class="form-group">
                <label class="mr-sm-2" for="title">Title</label>
                <textarea class="form-control" name="title" rows="3" id="title">{{ $bug->title }}</textarea>
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $bug->description }}</textarea>
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="video">Video</label>
                <textarea class="form-control" id="video" name="video" rows="3">{{ $bug->video }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label for="game">Game</label>
                <select name="game" class="form-control" id="game">
                    @foreach($games as $game)
                        <option {{ $bug->game->name === $game->name ? 'selected' : '' }} value="{{ $game->id }}">{{ $game->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="categories">Categories</label>
                <select multiple name="categories[]" class="select2 form-control custom-select select2-hidden-accessible"
                        style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true" id="categories">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ in_array($category->slug, $categoriesKey) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="validated" name="validated" type="checkbox" id="check" {{ $bug->validated_at ? 'checked' : '' }}>
                <label class="form-check-label" for="validated" id="check">
                    Validated
                </label>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="/dashboard/assets/libs/select2/dist/css/select2.min.css">
@endsection

@section('scripts')
    <script src="/dashboard/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="/dashboard/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="/dashboard/js/pages/forms/select2/select2.init.js"></script>
@endsection

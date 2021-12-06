@extends('layouts.admin')
@section('content')
    <div class="row">
        @foreach($bugs as $bug)
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($bug->title, 150) }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-folder feather-sm" style="margin-right: 5px">
                                <path
                                    d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                            </svg>
                            @foreach($bug->categories as $category)
                                <span class="mb-1 badge font-weight-medium bg-light-success text-success">{{ $category->name }}</span>
                            @endforeach
                        </h6>
                        <p><span class="mb-1 badge font-weight-medium bg-light-success text-success">{{ $bug->validated_at ? 'Published' : 'Not published' }}</span></p>
                        <p><span class="mb-1 badge font-weight-medium bg-light-success text-success">{{ $bug->game->name }}</span></p>
                        <p class="card-text pt-2">{{ $bug->user->pseudo }}</p>
                        <p class="card-text pt-2">{{ Str::limit($bug->description, 100) }}</p>
                        <a href="{{ route('admin.bugs.show', $bug) }}" class="card-link">Read more</a>
{{--                        <a href="#" class="card-link">Publish</a>--}}
                    </div>
                </div>
            </div>
        @endforeach
        {{ $bugs->links() }}
    </div>
@endsection

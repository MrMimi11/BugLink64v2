<nav class="navbar navbar-light">
    <form action="{{ route('games.bugs.search', $game->slug) }}" class="form-inline">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="q" value="{{ request()->q ?? '' }}"> {{--keep the text in the search bar--}}
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

{{--<form action="{{ route('games.bugs.search') }}" class="d-flex mr-3">--}}
{{--    <div class="form-group mb-0 mr-1">--}}
{{--        <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}">--}}
{{--    </div>--}}
{{--    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
{{--</form>--}}

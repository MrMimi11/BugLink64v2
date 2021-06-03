@extends('layouts.default')
@section('content')
    <h1 class="text-center">BugLink64</h1>

    <!-- news -->
    <h3 class="text-center mt-5">News</h3>
    <div class="d-flex justify-content-around mt-4 news">
        <div class="card cardnews" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="">
            <div class="card-body">
                <h5 class="card-title">Coming soon</h5>
                <p class="card-text"></p>
                <a href="#" class="btn">See this</a>
            </div>
        </div>
        <div class="card cardnews" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="">
            <div class="card-body">
                <h5 class="card-title">Coming soon</h5>
                <p class="card-text">

                </p>
                <a href="#" class="btn">See this</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="">
            <div class="card-body">
                <h5 class="card-title">Coming soon</h5>
                <p class="card-text"></p>
                <a href="#" class="btn">See this</a>
            </div>
        </div>
    </div>

    <!-- text center on home page-->
    <div class="centre">
        <p class="text-center mt-4">New in the discovery of bugs?</p>
        <p class="text-center">The info to get into the bugs is here!
            Bugs can be very useful to pass some stages of the game, some manipulations
            are enough to discover that one can walk above the void or even cross the walls...
            You know a bug that doesn’t exist here? Create an account and share it!
            If you have any further questions you can join the discord room or ask for help from members of
            the community.
            Have a good time!
        </p>
    </div>

    <!-- choice ocarina of time and majora's mask -->

    <div class="titlegame d-flex justify-content-around mt-5">
{{--        @foreach($games as $game)--}}
{{--            <li>--}}
{{--                <a href="{{ route('games.show', $game->slug) }}">{{ $game->name }}</a>--}}
{{--                <a style="color: deepskyblue;" href="{{ route('games.edit', $game->slug) }}">Edit</a>--}}
{{--                <a style="color: red;" href="{{ route('games.destroy', $game->slug) }}">Delete</a>--}}
{{--            </li>--}}
{{--        @endforeach--}}
        <div class="linkgame"> <a href="{{ route('ocarina') }}">The Legend of Zelda: Ocarina Of Time</a></div>
        <div class="linkgame"> <a href="{{ route('majora') }}">The Legend of Zelda: Majora's Mask</a></div>
    </div>

    <div class="imagegame d-flex justify-content-around mt-2">
        <div><img
                src="{{ asset('images/The_Legend_of_Zelda_Ocarina_of_Time_Logo.png') }}"
                alt="image ocarina of time" class="imageocarina"></div>
        <div><img
                src="{{ asset('images/The_Legend_of_Zelda_Majora\'s_Mask_Logo.png') }}"
                alt="image ocarina of time" class="imagemajora"></div>
    </div>

    <div class="d-flex justify-content-between mt-5 footer">
        <div class="contact">
            <p>Need help? You can contact me here <a href="{{ route('contact.create') }}">ici</a></p>
        </div>

        <div class="row d-flex flex-nowrap justify-content-center network">
            Network:
                <a href="https://discord.gg/VxtKfdAaE9"><img src="{{ asset('images/Discord-Logo+Wordmark-Color.svg') }}" alt="Discord" class="w-50 h-50"></a>
        </div>
    </div>

@endsection

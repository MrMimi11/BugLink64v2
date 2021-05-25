@extends('layouts.default')
@section('content')
    <h1 class="text-center">BugLink64</h1>

    <!-- news -->
    <h3 class="text-center mt-5">News</h3>
    <div class="d-flex justify-content-around mt-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="">
            <div class="card-body">
                <h5 class="card-title">Coming soon</h5>
                <p class="card-text"></p>
                <a href="#" class="btn">See this</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
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

    <!-- texte au centre pour le speedrun et bug -->
    <div class="centre">
        <p class="text-center mt-4">Nouveau dans le speedrun?</p>
        <p class="text-center">Les infos pour se lancer dans le speedrun, c'est ici!
            Le Speedrun c'est facile ! Même si vous n'en avez jamais fait vous pouvez venir découvrir, progresser,
            et
            peut-être que plus tard vous serez un*e pro en glitch et en speedrun et que vous obtiendrez un record du
            monde.
            Si vous avez d'autres questions vous pouvez rejoindre le salon discord ou demander de l'aide aux membres de
            la communauté.
            Amusez-vous bien !
        </p>
    </div>

    <!-- choice ocarina of time and majora's mask -->

    <div class="titrejeux d-flex justify-content-around mt-5">
{{--        @foreach($games as $game)--}}
{{--            <li>--}}
{{--                <a href="{{ route('games.show', $game->slug) }}">{{ $game->name }}</a>--}}
{{--                <a style="color: deepskyblue;" href="{{ route('games.edit', $game->slug) }}">Edit</a>--}}
{{--                <a style="color: red;" href="{{ route('games.destroy', $game->slug) }}">Delete</a>--}}
{{--            </li>--}}
{{--        @endforeach--}}
        <div class="linkgame"> <a href="{{ route('ocarina') }}">The Legend of Zelda: ocarina of time</a></div>
        <div class="linkgame"> <a href="{{ route('majora') }}">The Legend of Zelda: Majora's Mask</a></div>
    </div>

    <div class="imagejeux d-flex justify-content-around">
        <div><img
                src=""
                alt="image ocarina of time"></div>
        <div><img
                src=""
                alt="image ocarina of time"></div>
    </div>

    <div class="d-flex justify-content-between mt-5">
        <div class="contact">
            <p>Besoin d'aide? Vous pouvez me contacter <a href="{{ route('contact.create') }}">ici</a></p>
        </div>

        <div class="row d-flex flex-nowrap justify-content-center network">
            Network:
                <a href="https://discord.gg/VxtKfdAaE9"><img src="{{ asset('images/Discord-Logo+Wordmark-Color.svg') }}" alt="logo discord" class="w-50 h-50"></a>
        </div>
    </div>

@endsection

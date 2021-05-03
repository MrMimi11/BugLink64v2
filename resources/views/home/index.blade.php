@extends('layouts.default')
@section('content')
    <h1 class="text-center">BugLink64</h1>

    <!-- news -->
    <h3 class="text-center mt-5">Actualités</h3>
    <div class="d-flex justify-content-around mt-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Allez voir</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Allez voir</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Allez voir</a>
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
            la
            communauté.
            Amusez-vous bien !
        </p>
    </div>

    <!-- choice ocarina of time and majora's mask -->
    <div class="titrejeux d-flex justify-content-around mt-5">
        <div><u> <a href="{{ route('home.show') }}">The Legend of Zelda: ocarina of time</a></u></div>
        <div><u> <a href="#">The Legend of Zelda: Majora's Mask</a></u></div>
    </div>

    <div class="imagejeux d-flex justify-content-around">
        <div><img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC9_-IAXhJ67bTz_BGagLv4rynn5pFakS4l1I0DekbELkXSrANqmk8QpKU9CgM65I9aAo&usqp=CAU"
                alt="image ocarina of time"></div>
        <div><img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC9_-IAXhJ67bTz_BGagLv4rynn5pFakS4l1I0DekbELkXSrANqmk8QpKU9CgM65I9aAo&usqp=CAU"
                alt="image ocarina of time"></div>
    </div>

<div class="d-flex justify-content-between mt-5">
    <div class="contact">
        <p>Besoin d'aide? Vous pouvez me contacter <a href="{{ route('contact.create') }}">ici</a></p>
    </div>

    <div><u>Réseau:</u>
        <img src="../images/Discord-Logo-Color.svg" alt="logo discord">
    </div>
</div>

@endsection

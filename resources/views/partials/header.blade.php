<header>
    <div class="row container">

        <span id="header-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
        </span>

        <ul>
            <li>
                <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                    href="{{ route('comics') }}">COMICS</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                    href="{{ route('movies') }}">MOVIES</a>
            </li>
            <li>
                <a href="#">TV</a>
            </li>
            <li>
                <a href="#">GAMES</a>
            </li>
            <li>
                <a href="#">COLLECTIBLES</a>
            </li>
            <li>
                <a href="#">VIDEOS</a>
            </li>
            <li>
                <a href="#">FANS</a>
            </li>
            <li>
                <a href="#">NEWS</a>
            </li>
            <li>
                <a href="#">SHOP</a>

            </li>

        </ul>
    </div>

</header>

<div id="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
</div>

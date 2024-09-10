@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="series">
            <h2>CURRENT SERIES</h2>
        </div>

        <div class="card-container">

            @foreach ($comics_list as $comic)
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>

                    <div class="card-text">
                        <h3>{{ $comic['series'] }}</h3>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="button">
            <span>LOAD MORE</span>
        </div>
    </div>
@endsection


@section('titlePage')
    comics
@endsection

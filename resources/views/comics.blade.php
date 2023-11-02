@extends('layouts.app')

@section('page-title', 'Comics')


@section('content')

    <div class="container">
        <h1>Comics Page</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img-top">
                            <img width="300" height="auto" src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <div class="card-body">
                            <h4>{{ $comic['title'] }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

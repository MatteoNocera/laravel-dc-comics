@extends('layouts.app')

@section('page-title', 'Comics')


@section('content')

    <div class="container">
        <h1 class="py-5 display-3 fw-bold">Comics Page</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-5">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100 text-center shadow-lg border-0 rounded-4">
                        <div class="card-img-top">
                            @if (str_contains($comic->thumb, 'http'))
                                <img class="my_card img-fluid" src="{{ $comic->thumb }}" alt="">
                            @else
                                <img class="my_card img-fluid" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
                            @endif
                        </div>
                        <div class="card-body bg-warning rounded-bottom-4">
                            <h4>{{ $comic->title }}</h4>
                            <h5 class="text-danger">{{ $comic->price }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('welcome') }}" class="btn btn-warning my-5 shadow">Go to Home</a>
        </div>
    </div>

@endsection

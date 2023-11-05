@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="fw-bold display-4">Comic Title/Id:
            <span class="text-muted">{{ $comic->title }}/{{ $comic->id }}</span>
        </h1>


        <div class="row row-cols-1 row-cols-md-2">
            <div class="col p-4">

                @if (str_contains($comic->thumb, 'http'))
                    <img class="img-fluid shadow-lg" src="{{ $comic->thumb }}" alt="">
                @else
                    <img class="img-fluid shadow-lg" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
                @endif
            </div>
            <div class="col p-4 d-flex flex-column justify-content-between">

                <h3>Series: {{ $comic->series }}</h3>

                <div class="row pb-4">
                    <div class="col">
                        <h3>Series:
                            @foreach ($comic->artists as $artist)
                                <span class="fs-6 text-muted">{{ $artist }}</span>
                            @endforeach
                        </h3>

                    </div>
                    <div class="col">
                        <h3>Writers:
                            @foreach ($comic->writers as $writer)
                                <span class="fs-6 text-muted">{{ $writer }}</span>
                            @endforeach
                        </h3>
                    </div>

                </div>

                <h3>Description: <span class="fs-6 text-muted">{{ $comic->description }}</span></h3>

                <h2 class="display-5 text-danger">{{ $comic->price }}</h2>

            </div>
        </div>
    </div>
@endsection

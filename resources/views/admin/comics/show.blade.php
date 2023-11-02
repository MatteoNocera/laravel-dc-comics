@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="fw-bold display-4">
            {{ $comic->title }}
        </h1>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col p-4">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col p-4">
                <p>{{ $comic->description }}</p>
                <h2 class="display-5">{{ $comic->price }}</h2>
            </div>
        </div>
    </div>
@endsection

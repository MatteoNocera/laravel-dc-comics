@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h1 class="fw-bold display-4">Comic Title/Id:
            <span class="text-muted">{{ $comic->title }}/{{ $comic->id }}</span>
        </h1>


        <div class="py-3">
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Edit</a>

            <!-- Modal trigger button -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalId">
                Delete
            </button>

            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
                role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-warning">
                            <h5 class="modal-title" id="modalTitleId">Delete Comic</h5>

                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-5">
                            <h4>Do you really want to delete this Comic?</h4>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">

                                @csrf

                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Confirm</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-3 justify-content-around">
            <div class="col">
                <h1 class="my-4 display-4 fw-bold">Edit Comic Id: {{ $comic->id }}</h1>
                <form action="{{ route('comics.update', $comic) }}" method="post" enctype="multipart/form-data" class="">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder=""
                            value="{{ $comic->title }}" aria-describedby="comic_id:{{ $comic->id }}">
                        <small id="comic_id:{{ $comic->id }}"></small>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder=""
                            value="{{ $comic->price }}" aria-describedby="comic_id:{{ $comic->id }}">
                        <small id="comic_id:{{ $comic->id }}"></small>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" rows="7" name="description" id="description" class="form-control">{{ $comic->description }}></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Update Comic Image</label>
                        <input type="file" class="form-control" name="thumb" id="thumb" placeholder=""
                            aria-describedby="fileHelpId">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>

                </form>
            </div>
            <div class="col p-4">
                <div class="card-img">
                    @if (str_contains($comic->thumb, 'http'))
                        <img src="{{ $comic->thumb }}" alt="">
                    @else
                        <img src="{{ asset('storage/' . $comic->thumb) }}" alt="">
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection

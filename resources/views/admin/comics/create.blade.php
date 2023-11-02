@extends('layouts.app')

@section('content')
    <div class="container py-4 d-flex justify-content-around align-items-center">

        <form class="col-6" action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Insert New Title Here"
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control"
                    placeholder="Insert Description Here" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Insert Price Here"
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Chose Image</label>
                <input type="file" name="thumb" id="thumb" class="form-control" placeholder="Chose an Image"
                    aria-describedby="helpId">
            </div>

            <button class="btn btn-success" type="submit">Save</button>

        </form>

        <div class="bg-warning fw-bold p-3 rounded-2">
            <h1>Add a New Comic</h1>
        </div>


    </div>
@endsection

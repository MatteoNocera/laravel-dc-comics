@extends('layouts.admin')

@section('content')
    <section class="py-4">
        <div class="container position-relative">
            <h4 class="my-4 display-4 fw-bold">All Comics</h4>

            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif

            <a class="btn btn-primary position-fixed bottom-0 end-0 m-4" href="{{ route('comics.create') }}">➕ Add
                Comic</a>


            <div class="card">

                <div class="table-responsive-sm">
                    <table class="table table-light mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($comics as $comic)
                                <tr class="">
                                    <td scope="row">{{ $comic->id }}</td>
                                    <td>

                                        @if (str_contains($comic->thumb, 'http'))
                                            <img width="60" src="{{ $comic->thumb }}" alt="">
                                        @else
                                            <img width="60" src="{{ asset('storage/' . $comic->thumb) }}"
                                                alt="">
                                        @endif


                                    </td>
                                    <td>{{ $comic->title }}</td>
                                    <td>

                                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Edit</a>

                                        <!-- Modal trigger button -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalId">
                                            Delete
                                        </button>

                                        <!-- Modal Body -->
                                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-warning">
                                                        <h5 class="modal-title" id="modalTitleId">Delete Comic</h5>

                                                        <button type="button" class="btn-close bg-white"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-5">
                                                        <h4>Do you really want to delete this Comic?</h4>
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>

                                                        <form action="{{ route('comics.destroy', $comic->id) }}"
                                                            method="POST">

                                                            @csrf

                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger">Confirm</button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                    </td>
                                </tr>
                            @empty
                                <tr class="">

                                    <td>Oops! No Comics yet!</td>

                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection

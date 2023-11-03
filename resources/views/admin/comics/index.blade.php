@extends('layouts.admin')

@section('content')
    <section class="py-4">
        <div class="container position-relative">
            <h4 class="text-muted text-uppercase">All Comics</h4>
            <a class="btn btn-primary position-fixed bottom-0 end-0 m-4" href="{{ route('comics.create') }}">Add
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
                                        <a href="#" class="btn btn-danger">Delete</a>



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

@extends('layouts.app')

@section('content')
    <section class="my-4">
        <div class="container">
            <h4 class="text-muted text-uppercase">All Comics</h4>
            <a class="btn btn-primary position-fixed bottom-0 end-0 m-4" href="">Add
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

                                        <img width="100" src="{{ asset('storage/' . $comic->cover_image) }}"
                                            alt="">

                                    </td>
                                    <td>{{ $comic->title }}</td>
                                    <td>

                                        <a href="#" class="btn btn-primary">View</a>
                                        <a href="#" class="btn btn-secondary">Edit</a>

                                        Delete
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

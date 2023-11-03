@extends('layouts.app')

@section('page-title', 'Home')


@section('content')
    <section id="welcome">
        <div class="container">
            <div class="row align-items-md-stretch py-5">
                <div class="col">
                    <div class="h-100 p-5 text-white bg-primary border rounded-3">
                        <h2>Welcome to the Comics Site</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet velit voluptates impedit, sint
                            itaque quis a laborum facilis, atque deleniti placeat! Et fuga perferendis consequatur culpa
                            excepturi accusamus iure laudantium ducimus minus id molestias delectus, qui dignissimos
                            consectetur
                            dolor deserunt maxime eum magni nihil? Laboriosam pariatur quae nobis, repellat magni veniam
                            suscipit? Placeat nesciunt architecto esse cumque suscipit voluptatum vero error repellendus
                            voluptatibus tenetur, expedita possimus minima, saepe reiciendis numquam nemo delectus soluta!
                            Voluptatem placeat impedit quisquam dolorem deleniti voluptates ipsam, doloremque praesentium
                            possimus esse id labore minima nisi. Incidunt nihil hic tempore voluptas earum necessitatibus
                            officiis numquam atque sapiente?</p>
                        <a href="{{ route('comics') }}" class="btn btn-warning btn-outline-light" type="button">See Comics</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

@extends('layouts.app')

@section('page-title', 'Home')


@section('content')
    <section id="welcome">

        <div class="container">
            <div class="row align-items-md-stretch py-5">
                <div class="col">
                    <div class="h-100 p-5 bg-primary-subtle border rounded-3">
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
                        <a href="{{ route('comics') }}" class="btn btn-warning" type="button">See
                            Comics</a>
                    </div>
                </div>

            </div>

        </div>

        <div class="container">
            <h2 class="text-center display-3">Lorem, ipsum dolor.</h2>
            <p class="py-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat quasi velit praesentium! Veritatis,
                facilis
                sit eaque animi similique fuga quidem esse repellendus amet assumenda reiciendis accusamus, officia,
                inventore
                a! Eos autem a ipsum omnis facilis consequuntur alias deleniti ut dolore beatae! Tempora saepe esse expedita
                nam. Unde inventore nihil harum eligendi praesentium quo et voluptatum, fuga consequatur? Reprehenderit, vel
                quisquam. Vel et repellendus labore. Ipsam mollitia adipisci est odio voluptatum atque porro labore,
                accusamus
                sint in corporis doloribus optio? Excepturi rem deleniti ad cum consequatur numquam deserunt unde
                asperiores?
                Doloremque eaque fugiat esse, a impedit quam ducimus fugit similique ipsum?
            </p>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card h-100 text-center shadow-lg border-0 rounded-4">
                            <div class="card-img-top">
                                @if (str_contains($comic->thumb, 'http'))
                                    <img class="my_card img-fluid px-2" src="{{ $comic->thumb }}" alt="">
                                @else
                                    <img class="my_card img-fluid px-2" src="{{ asset('storage/' . $comic->thumb) }}"
                                        alt="">
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
        </div>

    </section>
@endsection

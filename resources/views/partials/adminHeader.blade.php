<header>


    <nav class="nav justify-content-center bg-warning py-2 d-flex">
        <a class="nav-link fs-5 text-black {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}"
            href="{{ route('comics.index') }}" aria-current="page">
            DashBoard
        </a>

        <a id="admin_btn" class="btn fs-5 rounded-pill text-end justify-end" href="{{ route('welcome') }}">
            Logout
        </a>

    </nav>

</header>

<header>


    <nav class="nav justify-content-center bg-warning py-2 d-flex">
        <a class="nav-link fs-5 text-black {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}"
            href="{{ route('welcome') }}" aria-current="page">
            Home
        </a>
        <a class="nav-link fs-5 text-black {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
            href="{{ route('comics') }}">
            Comics
        </a>
        <a id="admin_btn" class="btn btn-primary fs-5 rounded-pill text-end justify-end"
            href="{{ route('comics.index') }}">Admin</a>

    </nav>



</header>

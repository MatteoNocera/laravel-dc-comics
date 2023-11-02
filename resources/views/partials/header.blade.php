<header>


    <nav class="nav justify-content-center bg-warning">
        <a class="nav-link text-black {{ Route::currentRouteName() === 'welcome' ? 'active' : '' }}"
            href="{{ route('welcome') }}" aria-current="page">
            Home
        </a>
        <a class="nav-link text-black {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
            href="{{ route('comics') }}">
            Comics
        </a>

    </nav>



</header>

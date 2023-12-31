<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand text-success fw-bold" href="{{ route('user') }}">My<span
                class="text-primary">Blog</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('user') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('laravel.page') }}" aria-disabled="true">Laravel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('flutter.page') }}" aria-disabled="true">Flutter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bootstrap.page') }}" aria-disabled="true">Bootstrap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('react.page') }}" aria-disabled="true">React</a>
                </li>
            </ul>
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
        </div>
    </div>
</nav>

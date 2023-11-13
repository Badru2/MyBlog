@extends('layouts.appUser')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner" style="height: 300px">
            <div class="carousel-item active" data-bs-interval="5000">
                <a href="{{ route('laravel.page') }}">
                    <img src="https://rizkimuliono.blog.uma.ac.id/wp-content/uploads/sites/365/2020/05/maxresdefault.jpg"
                        class="d-block w-100 object-fit-cover" alt="...">
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <a href="{{ route('flutter.page') }}">
                    <img src="https://rizkimuliono.blog.uma.ac.id/wp-content/uploads/sites/365/2020/05/maxresdefault.jpg"
                        class="d-block w-100 object-fit-cover" alt="...">
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <a href="{{ route('bootstrap.page') }}">
                    <img src="https://rizkimuliono.blog.uma.ac.id/wp-content/uploads/sites/365/2020/05/maxresdefault.jpg"
                        class="d-block w-100 object-fit-cover" alt="...">
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <a href="{{ route('react.page') }}">
                    <img src="https://rizkimuliono.blog.uma.ac.id/wp-content/uploads/sites/365/2020/05/maxresdefault.jpg"
                        class="d-block w-100 object-fit-cover" alt="...">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4 mt-4">
                    <div class="card shadow">
                        <a href="{{ route('show.page', $post->id) }}">
                            <img src="{{ asset('/storage/posts/' . $post->image) }}" class="card-img-top card-image"
                                alt="">
                        </a>
                        <div class="card-body">
                            <div class="card-title">
                                <label class="category">{{ $post->category }}</label>
                                @foreach ($post->tags as $tag)
                                    <label class="tagging">{{ $tag->name }}</label>
                                @endforeach
                            </div>
                            <a class="link-underline link-underline-opacity-0 link-dark"
                                href="{{ route('show.page', $post->id) }}">
                                <div class="card-title fw-bold">{{ $post->title }}</div>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="d-flex">
            <div class="mt-5 mb-5 mx-auto">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection

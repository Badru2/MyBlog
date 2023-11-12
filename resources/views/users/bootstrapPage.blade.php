@extends('layouts.appUser')

@section('title')
    Bootstrap Page
@endsection

@section('content')
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

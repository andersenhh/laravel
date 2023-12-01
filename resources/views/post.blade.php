@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/posts/?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
            <div style="max-height: 250px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid ">
            </div>
            @else
            <img src="https://source.unsplash.com/1300x500?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid ">
            @endif


                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/" class="d-block mt-3">Back to Article</a>
        
            </div>
        </div>
    </div>

@endsection


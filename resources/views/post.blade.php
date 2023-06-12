@extends('layouts.main')
@section('container')

<div class="continer">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 ">
            <h2 class='mb-3'>{{ $post->title }}</h2>
            <p>By <a href="/authors/{{ $post->user->username }}" class='text-decoration-none'>{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class='text-decoration-none'>{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height:350px; overflow:hidden">
                    <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/blog">Back to Posts</a>
        </div>
    </div>
</div>

@endsection
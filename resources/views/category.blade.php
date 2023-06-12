@extends('layouts.main')
@section('container')
<h1 class='mb-5'>Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-5">
    <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
    <p>By <a href="/authors/{{ $post->user->username }}" class='text-decoration-none'>{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class='text-decoration-none'>{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class='text-decoration-none'>Read more...</a>
    </article>
    @endforeach
@endsection
    

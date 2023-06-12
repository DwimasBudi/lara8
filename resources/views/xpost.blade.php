@extends('layouts.main')
@section('container')

@foreach ($categories as $category)

    <h2>{{ $category->name }}</h2>

    @foreach ($category->posts as $post)

        <h3>{{ $post->title }}</h3>

    @endforeach
    <hr>
@endforeach



@endsection
    

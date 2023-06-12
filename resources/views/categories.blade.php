
@extends('layouts.main')
@section('container')

<h1 class='mb-5'>Halaman Category</h1>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <div class="card text-bg-dark">
            <img src="https://source.unsplash.com/600x200?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
            <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">
            <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title flex-fill text-center p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
            </div>
            </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection
    

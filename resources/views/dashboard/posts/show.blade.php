@extends('dashboard.layouts.main')
@section('container')
 <div class="continer">
    <div class="row mb-5">
        <div class="col-lg-8 ">
            <h2 class='mb-3'>{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to All My post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i> Delete</button>
                   {{-- <a href="" class="badge text-bg-danger"></a> --}}
                </form>
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
        </div>
    </div>
</div>
@endsection
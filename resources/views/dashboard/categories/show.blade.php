@extends('dashboard.layouts.main')

@section('container')
    
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $category->title }}</h1>

           <a href="/dashboard/categories/" class="btn btn-success"><span data-feather="arrow-left"></span>Back to My Article</a>
           <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
           <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus post ini?')">
              <span data-feather="x-circle"></span>Delete</button>
            </form>

            @if ($category->image)
            <div style="max-height: 250px; overflow:hidden;">
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->category->name }}" class="img-fluid mt-3">
            </div>
            @else
            <img src="https://source.unsplash.com/1300x500?{{ $category->category->name }}" alt="{{ $category->category->name }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
                {!! $category->body !!}
            </article>
    
        </div>
    </div>
</div>

@endsection
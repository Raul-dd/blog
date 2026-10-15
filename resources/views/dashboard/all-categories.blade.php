@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/manage_post/categories/css/article_category.css') }}">
@endsection

@section('title', 'Blog')

@section('content')

@include('layouts.navbar')

<div class="text-primary">
    <h2>TODAS LAS CATEGORIAS</h2>
</div>

<div class="article-container">
    <!-- Listar categorías -->
    @foreach ($categories as $category)
    <article class="article category">
        <img src="{{$category->image}}" class="img">
        {{--        <img src="{{asset('storage/').$category->image}}" class="img"> --}}
        <div class="card-body">
            <a href="{{route('categories.detail', $category->slug)}}">
                <h2 class="title category fs-4">{{$category->name}}</h2>
            </a>
        </div>
    </article>
    @endforeach
</div>

<div class="links-paginate">
    {{$categories->links()}}
</div>
@endsection

@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/manage_post/post/css/article_show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manage_post/comments/css/comments.css') }}">
@endsection

@section('title', 'Articulo')

@section('content')

<div class="content-post">

    <div class="post-title line">
        <h2 class="fw-bold">{{ $article->title }}</h2>
    </div>

    <div class="post-introduction line">
        <p>{{ $article->introduction }}</p>
    </div>

    <div class="post-author line">
        <img
            src="{{ $article->user->profile->photo ? asset('storage/'.$article->user->profile->photo) : asset('img/user-default.png') }}"
            class="img-author"
        >

        <span>Autor:
            <a href="#">
                {{ $article->user->full_name }}
            </a>
        </span>
    </div>

    <hr>

    <div class="post-image">
        <img
            {{-- src="{{ asset('storage/' . $article->image) }}" --}}
            src="{{$article->image}}"
            alt="{{ $article->title }}"
            class="post-image-img"
        >
    </div>

    <div class="post-body line">
        {!! $article->body !!}
    </div>

    <hr>
</div>

<div class="text-primary">
    <h2>Comentarios</h2>
</div>

@if(Auth::check())
    @include('subscriber.comments.create')
@else
<p class="alert-post">
    Para comentar debe iniciar sesión
</p>
@endif

@if(session('success-error'))
<div class="text-danger text-center">
    <p class="fs-5">{{session('success-error')}}</p>
</div>
@endif

@include('subscriber.comments.show')

@endsection

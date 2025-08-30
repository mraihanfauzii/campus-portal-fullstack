@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <article>
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p class="text-muted">Dipublikasikan pada {{ $post->created_at->format('d F Y') }}</p>

                <img src="{{ asset($post->image) }}" class="img-fluid rounded my-4" alt="{{ $post->title }}">

                <div class="fs-5">
                    {!! nl2br(e($post->body)) !!}
                </div>
            </article>

            <div class="mt-5">
                <a href="{{ route('news') }}" class="btn btn-outline-secondary">&laquo; Kembali ke Daftar Berita</a>
            </div>
        </div>
    </div>
</div>
@endsection
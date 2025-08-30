@extends('layouts.app')

@section('title', $activity->title)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <article>
                <span class="badge bg-primary mb-2 fs-6">{{ $activity->category }}</span>
                <h1 class="mb-3">{{ $activity->title }}</h1>
                <p class="text-muted">Informasi dipublikasikan pada {{ $activity->created_at->format('d F Y') }}</p>

                <img src="{{ asset($activity->image) }}" class="img-fluid rounded my-4" alt="{{ $activity->title }}">

                <div class="fs-5">
                    {!! nl2br(e($activity->body)) !!}
                </div>
            </article>

            <div class="mt-5">
                <a href="{{ route('activities') }}" class="btn btn-outline-secondary">&laquo; Kembali ke Daftar Kegiatan</a>
            </div>
        </div>
    </div>
</div>
@endsection
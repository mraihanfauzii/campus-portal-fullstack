@extends('layouts.app')

@section('title', 'Berita Terbaru')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Berita Terbaru Kampus</h1>
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-4 mb-4">
                <a href="{{ route('news.detail', $post->slug) }}" class="card-link">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <p class="card-text"><small class="text-muted">Dipublikasikan {{ $post->created_at->diffForHumans() }}</small></p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col">
                <p class="text-center">Belum ada berita yang dipublikasikan.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection

@push('styles')
<style>
    .card-hover:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
    }
</style>
@endpush
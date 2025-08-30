@extends('layouts.app')

@section('title', 'Selamat Datang di Campus Portal')

@section('content')
    {{-- Bagian Hero/Jumbotron --}}
    <div id="hero-section" class="container-fluid bg-light py-5 mb-5">
        <div class="container text-center py-5" style="background-color: rgba(255, 255, 255, 0.85); border-radius: 15px; padding: 40px;">
            <h1 class="display-4 fw-bold" style="color: #D90000;">Gerbang Menuju Masa Depan Cemerlang</h1>
            <p class="fs-4">Menjadi pusat pendidikan unggul yang menghasilkan lulusan berkarakter, inovatif, dan berdaya saing global.</p>
            <a href="{{ route('about') }}" class="btn btn-primary btn-lg mt-3">Pelajari Lebih Lanjut</a>
        </div>
    </div>

    {{-- Bagian Berita Terbaru --}}
    <div class="container">
        <h2 class="text-center mb-4">Berita Terbaru</h2>
        <div class="row">
            @forelse ($latest_posts as $post)
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
        <div class="text-center mt-3">
            <a href="{{ route('news') }}" class="btn btn-outline-primary">Lihat Semua Berita</a>
        </div>
    </div>
@endsection

{{-- CSS KHUSUS UNTUK HALAMAN INI SAJA --}}
@push('styles')
<style>
    #hero-section {
        background-image: url("{{ asset('images/campus_background.jpg') }}");
        background-size: cover;
        background-position: center;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
    }
</style>
@endpush
@extends('layouts.app')

@section('title', 'Kegiatan Kampus')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Kegiatan & Organisasi Mahasiswa</h1>
    <div class="row">
        @forelse ($activities as $activity)
            <div class="col-md-4 mb-4">
                <a href="{{ route('activities.detail', $activity->slug) }}" class="card-link">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="{{ asset($activity->image) }}" class="card-img-top" alt="{{ $activity->title }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">{{ $activity->category }}</span>
                            <h5 class="card-title">{{ $activity->title }}</h5>
                            <p class="card-text">{{ $activity->excerpt }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col">
                <p class="text-center">Belum ada informasi kegiatan yang dipublikasikan.</p>
            </div>
        @endforelse
    </div>
</div>

<style>
    .card-hover:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
    }
</style>
@endsection
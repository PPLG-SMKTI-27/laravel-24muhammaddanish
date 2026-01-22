@extends('layouts.app')

@section('title', 'Proyek - Aplikasi Laravel Blade')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <h2 class="mb-4">Daftar Proyek</h2>
            
            @forelse($projects as $project)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['name'] }}</h5>
                        <p class="card-text">{{ $project['description'] }}</p>
                        <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    <strong>Belum ada proyek</strong><br>
                    Mulai buat proyek baru untuk menampilkannya di sini.
                </div>
            @endforelse
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Info Sidebar</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Sidebar ini dapat digunakan untuk informasi tambahan atau widget lainnya.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

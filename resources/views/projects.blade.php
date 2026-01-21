@extends('layouts.app')

@section('title', 'Proyek - Aplikasi Laravel Blade')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <h2 class="mb-4">Daftar Proyek</h2>
            
            @forelse($projects ?? [] as $project)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['name'] ?? 'Proyek' }}</h5>
                        <p class="card-text">{{ $project['description'] ?? 'Tidak ada deskripsi' }}</p>
                        <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    <strong>Belum ada proyek</strong><br>
                    Mulai buat proyek baru untuk menampilkannya di sini.
                </div>

                <!-- Contoh Proyek -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">E-Commerce Platform</h5>
                        <p class="card-text">Platform e-commerce modern dengan fitur lengkap seperti keranjang belanja, pembayaran, dan manajemen inventori.</p>
                        <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Blog Management System</h5>
                        <p class="card-text">Sistem manajemen blog dengan fitur CRUD, kategorisasi, dan komentar user.</p>
                        <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Task Management App</h5>
                        <p class="card-text">Aplikasi manajemen tugas dengan fitur kolaborasi tim dan tracking progress.</p>
                        <a href="#" class="btn btn-sm btn-primary">Lihat Detail</a>
                    </div>
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

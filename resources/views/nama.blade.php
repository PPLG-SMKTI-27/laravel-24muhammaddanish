@extends('layouts.app')

@section('title', 'Tampilkan Nama')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informasi Nama</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">Nama yang Anda Masukkan:</h4>
                        <h2 class="text-primary">{{ $nama ?? 'Tidak ada data' }}</h2>
                    </div>
                    
                    <p class="text-muted">
                        Anda dapat mengakses halaman ini melalui URL: <br>
                        <code>/tampilkan-nama/{nama}</code>
                    </p>
                    
                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

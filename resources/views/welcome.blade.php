@extends('layouts.app')

@section('title', 'Home - Aplikasi Laravel Blade')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="jumbotron bg-light p-5 rounded-lg">
                <h1 class="display-4">Selamat Datang!</h1>
                <p class="lead">Ini adalah aplikasi Laravel yang menggunakan Blade Template Engine</p>
                <hr class="my-4">
                <p>Blade adalah template engine yang powerful dan intuitif milik Laravel.</p>
                <a class="btn btn-primary btn-lg" href="{{ url('/about') }}" role="button">Pelajari Lebih Lanjut</a>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Template Engine</h5>
                            <p class="card-text">Blade menyediakan syntax yang sederhana namun powerful untuk bekerja dengan data.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reusable Layouts</h5>
                            <p class="card-text">Gunakan layout untuk menghindari duplikasi kode dan menjaga konsistensi desain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

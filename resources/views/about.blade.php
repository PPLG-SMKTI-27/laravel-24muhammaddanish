@extends('layouts.app')

@section('title', 'Tentang - Aplikasi Laravel Blade')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="mb-4">Tentang Aplikasi Ini</h2>
            
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Apa itu Blade?</h5>
                    <p class="card-text">
                        Blade adalah template engine yang dikirimkan dengan Laravel. Meskipun banyak template engine PHP lainnya yang didukung Laravel, Blade memotivasi Anda untuk tidak mencampur logika PHP biasa di templat Anda.
                    </p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Fitur Utama Blade</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Template Inheritance - @extends, @section, @yield</li>
                        <li class="list-group-item">Data Binding - {{ }} untuk output</li>
                        <li class="list-group-item">Control Structures - @if, @foreach, @while, dll</li>
                        <li class="list-group-item">Components dan Slots</li>
                        <li class="list-group-item">Include Files</li>
                        <li class="list-group-item">Escaping yang otomatis untuk keamanan</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mengapa Menggunakan Blade?</h5>
                    <p class="card-text">
                        Blade dirancang untuk membuat template yang lebih bersih dan mudah dibaca. Dengan syntax yang sederhana, Anda dapat fokus pada logika presentasi daripada syntax yang kompleks.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

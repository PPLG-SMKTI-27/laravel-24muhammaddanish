<?php
require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// authenticate as admin user so auth()->user() isn't null
$user = App\Models\User::where('name','sephiroth')->first();
Illuminate\Support\Facades\Auth::login($user);

$projects = App\Models\Project::all();
echo view('dashboard', compact('projects'))->render();

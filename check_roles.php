<?php
require 'vendor/autoload.php';
// simple laravel bootstrap
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

foreach (App\Models\User::all() as $u) {
    echo $u->name . ' ' . ($u->role ?? 'NULL') . "\n";
}

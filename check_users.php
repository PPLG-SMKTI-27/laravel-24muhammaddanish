<?php
require 'vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

foreach (App\Models\User::all() as $u) {
    echo $u->name . ' role:' . ($u->role ?? 'NULL') . ' verified:' . ($u->email_verified_at ?? 'NULL') . "\n";
}

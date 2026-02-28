<?php
require 'vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$projects = App\Models\Project::all();
echo "Count: " . $projects->count() . "\n";
foreach ($projects as $p) {
    echo $p->id . ' ' . $p->title . ' ' . $p->status . '\n';
}

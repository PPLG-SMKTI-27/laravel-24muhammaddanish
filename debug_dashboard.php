<?php
// boot Laravel
require __DIR__.'/vendor/autoload.php';
$app = require __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$request = Illuminate\Http\Request::create('/dashboard', 'GET');
// authenticate as sephiroth
$user = App\Models\User::where('name','sephiroth')->first();
Illuminate\Support\Facades\Auth::login($user);
$response = $kernel->handle($request);
echo $response->getContent();

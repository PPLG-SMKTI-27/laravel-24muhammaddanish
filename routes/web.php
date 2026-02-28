<?php                           

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    $user = auth()->user();
    if ($user->role !== 'admin') {
        abort(403);
    }
    $projects = \App\Models\Project::all();
    return view('dashboard', compact('projects'));
})->middleware(['auth', 'verified'])->name('dashboard');


 // basic listing route removed in favour of resource controller
 Route::resource('projects', ProjectController::class); // provides index, create, store, show, edit, update, destroy

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

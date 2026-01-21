<?php


namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class ProjectController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('nama', [
            'Danish' => User::findOrFail($id)
        ]);
    }

    /**
     * Show the name with a given parameter.
     */
    public function tampilkanNama(string $nama): View
    {
        return view('nama', [
            'nama' => $nama
        ]);
    }
}
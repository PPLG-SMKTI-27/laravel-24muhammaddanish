<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\User;
use Illuminate\View\View;
 
class ProjectController extends Controller
{
    /**
     * Display all projects
     */
    public function index()
    { 
      $projects = Project::all();
     return view('projects', compact('projects'));
       
    }

    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('nama', [
            'user' => User::findOrFail($id)
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
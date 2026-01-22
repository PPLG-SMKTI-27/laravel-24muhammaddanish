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

    /**
     * Show projects page.
     */
    public function projects(): View
    {
        $projects = [
            [
                'name' => 'E-Commerce Platform',
                'description' => 'Platform e-commerce modern dengan fitur lengkap seperti keranjang belanja, pembayaran, dan manajemen inventori.'
            ],
            [
                'name' => 'Blog Management System',
                'description' => 'Sistem manajemen blog dengan fitur CRUD, kategorisasi, dan komentar user.'
            ],
            [
                'name' => 'Task Management App',
                'description' => 'Aplikasi manajemen tugas dengan fitur kolaborasi tim dan tracking progress.'
            ],
             [
                'name' => 'Task Management App',
                'description' => 'Aplikasi manajemen tugas dengan fitur kolaborasi tim dan tracking progress.'
            ]
        ];

        return view('projects', [
            'projects' => $projects
        ]);
    }
}
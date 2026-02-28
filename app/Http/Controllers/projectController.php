<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function __construct()
    {
        // require authentication for anything except viewing list and single records
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the projects.
     */
    public function index(): View
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     */
    public function create(): View
    {
        return view('projects.create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // support the simple "quest" form (name/progress/status) and the full form
        if ($request->has('name')) {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'progress' => 'nullable|integer|min:0|max:100',
                'status' => 'nullable|string|max:50',
                'description' => 'nullable|string',
            ]);

            Project::create([
                'title' => $data['name'],
                'category' => 'Quest',
                'filter_category' => 'active_quest',
                'progress' => $data['progress'] ?? 0,
                'status' => $data['status'] ?? 'ACTIVE',
                'description' => $data['description'] ?? 'No description',
                'demo_url' => '#',
                'source_url' => '#',
            ]);

            // after creating from dashboard, go back there
        return redirect()->route('dashboard')->with('success', 'Quest Added!');
        }

        $data = $request->validate([
            'title'           => 'required|string|max:255',
            'category'        => 'required|string|max:255',
            'filter_category' => 'required|string|max:255',
            'description'     => 'required|string',
            'icon'            => 'nullable|string|max:255',
            'image'           => 'nullable|url|max:2048',
            'demo_url'        => 'nullable|url|max:2048',
            'source_url'      => 'nullable|url|max:2048',
        ]);

        Project::create($data);

        return redirect()->route('dashboard')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified project.
     */
    public function show(string $id): View
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit(string $id): View
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $project = Project::findOrFail($id);
        // support updating from simplified form
        if ($request->has('name')) {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'progress' => 'nullable|integer|min:0|max:100',
                'status' => 'nullable|string|max:50',
                'description' => 'nullable|string',
            ]);

            $project->update([
                'title' => $data['name'],
                'category' => $project->category ?? 'Quest',
                'filter_category' => $project->filter_category ?? 'active_quest',
                'progress' => $data['progress'] ?? $project->progress,
                'status' => $data['status'] ?? $project->status,
                'description' => $data['description'] ?? $project->description,
            ]);

            return redirect()->route('dashboard')->with('success', 'Quest updated successfully.');
        }

        $data = $request->validate([
            'title'           => 'required|string|max:255',
            'category'        => 'required|string|max:255',
            'filter_category' => 'required|string|max:255',
            'description'     => 'required|string',
            'icon'            => 'nullable|string|max:255',
            'image'           => 'nullable|url|max:2048',
            'demo_url'        => 'nullable|url|max:2048',
            'source_url'      => 'nullable|url|max:2048',
        ]);

        $project->update($data);

        return redirect()->route('dashboard')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('dashboard')->with('success', 'Project deleted successfully.');
    }
}


@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">{{ $project->title }}</h1>
    <p><strong>Category:</strong> {{ $project->category }}</p>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    @if($project->icon)
        <p><strong>Icon:</strong> <img src="{{ $project->icon }}" alt="icon" class="h-8"></p>
    @endif
    @if($project->image)
        <p><strong>Image:</strong> <img src="{{ $project->image }}" alt="image" class="h-32"></p>
    @endif
    @if($project->demo_url)
        <p><a href="{{ $project->demo_url }}" class="text-blue-600 hover:underline">Live Demo</a></p>
    @endif
    @if($project->source_url)
        <p><a href="{{ $project->source_url }}" class="text-blue-600 hover:underline">Source Code</a></p>
    @endif
    <a href="{{ route('projects.index') }}" class="mt-4 inline-block text-gray-600">Back to list</a>
</div>
@endsection

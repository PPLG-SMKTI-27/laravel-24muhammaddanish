@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">New Project</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-medium">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Category</label>
            <input type="text" name="category" value="{{ old('category') }}" class="w-full border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Filter Category</label>
            <input type="text" name="filter_category" value="{{ old('filter_category') }}" class="w-full border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full border px-3 py-2" required>{{ old('description') }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block font-medium">Icon URL</label>
            <input type="text" name="icon" value="{{ old('icon') }}" class="w-full border px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Image URL</label>
            <input type="text" name="image" value="{{ old('image') }}" class="w-full border px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Demo URL</label>
            <input type="text" name="demo_url" value="{{ old('demo_url') }}" class="w-full border px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block font-medium">Source URL</label>
            <input type="text" name="source_url" value="{{ old('source_url') }}" class="w-full border px-3 py-2">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('projects.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </form>
</div>
@endsection

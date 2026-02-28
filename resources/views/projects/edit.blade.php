@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
    .ff-window{background:linear-gradient(180deg,#0000ad 0%,#000021 100%);border:4px solid #f0f0f0;border-radius:10px;box-shadow:0 0 0 2px #000,0 0 0 5px #666;padding:25px;max-width:900px;margin:40px auto;color:#fff;font-family:'Press Start 2P',cursive}
    h1.ff{color:#ffff00;font-size:1.5rem;text-shadow:3px 3px #000;margin-bottom:30px}
    label.ff{color:#aaa;font-size:0.7rem;display:block;margin-bottom:8px;text-transform:uppercase}
    .ff-btn{background:none;border:2px solid transparent;color:#fff;cursor:pointer;font-family:inherit;font-size:0.8rem;padding:5px 10px;margin-right:10px}
    .ff-btn:hover{color:#ffff00}
    input.ff,textarea.ff,select.ff{background:rgba(0,0,0,0.5);border:1px solid #fff;color:#fff;padding:8px;font-family:inherit;font-size:0.6rem;margin-bottom:15px}
</style>

<div class="ff-window">
    <h1 class="ff">MODIFY QUEST</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label class="ff">Quest Name</label>
        <input class="ff" type="text" name="name" value="{{ old('name', $project->title) }}" required style="width:100%;">
        
        <label class="ff">Progress</label>
        <input class="ff" type="number" name="progress" min="0" max="100" value="{{ old('progress', $project->progress) }}" style="width:80px;">
        
        <label class="ff">Status</label>
        <select name="status" class="ff" style="width:150px;">
            <option value="ACTIVE" {{ $project->status == 'ACTIVE' ? 'selected' : '' }}>ACTIVE</option>
            <option value="POISON" {{ $project->status == 'POISON' ? 'selected' : '' }}>POISON</option>
            <option value="KO" {{ $project->status == 'KO' ? 'selected' : '' }}>KO</option>
        </select>
        
        <label class="ff">Description</label>
        <textarea class="ff" name="description" style="width:100%; height:80px;">{{ old('description', $project->description) }}</textarea>
        
        <hr style="border: 1px solid rgba(255,255,255,0.2); margin: 20px 0;">
        
        <button type="submit" class="ff-btn">SAVE CHANGES</button>
        <a href="{{ route('projects.index') }}" class="ff-btn">CANCEL</a>
    </form>
</div>

@endsection

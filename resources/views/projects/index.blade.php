@extends('layouts.app')

@extends('layouts.app')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
    .ff-window{background:linear-gradient(180deg,#0000ad 0%,#000021 100%);border:4px solid #f0f0f0;border-radius:10px;box-shadow:0 0 0 2px #000,0 0 0 5px #666;padding:25px;max-width:900px;margin:40px auto;color:#fff;font-family:'Press Start 2P',cursive}
    h1.ff{color:#ffff00;font-size:1.5rem;text-shadow:3px 3px #000;margin-bottom:30px}
    table.ff{width:100%;border-collapse:separate;border-spacing:0 15px}
    th.ff{ text-align:left;color:#aaa;font-size:0.7rem;padding-bottom:10px }
    .atb-container{width:150px;height:12px;border:1px solid #fff;background:#222;position:relative}
    .atb-fill{height:100%;background:linear-gradient(90deg,#0066cc,#00ffff);box-shadow:0 0 8px #00ffff}
    .ff-btn{background:none;border:2px solid transparent;color:#fff;cursor:pointer;font-family:inherit;font-size:0.8rem;padding:5px 10px}
    input.ff{background:rgba(0,0,0,0.5);border:1px solid #fff;color:#fff;padding:8px;font-family:inherit;font-size:0.6rem}
    .project-row{position:relative;cursor:pointer}
    .project-row:hover td{background:rgba(0,255,255,0.1)}
    .description-tooltip{position:absolute;bottom:100%;left:0;background:rgba(0,0,0,0.9);border:2px solid #00ffff;padding:10px;margin-bottom:10px;max-width:300px;color:#fff;font-size:0.7rem;font-family:inherit;display:none;z-index:1000;box-shadow:0 0 10px #00ffff;white-space:normal}
    .project-row:hover .description-tooltip{display:block}
</style>

<div class="ff-window">
    <h1 class="ff">QUEST LOG (PROJECTS)</h1>
    <a href="{{ url('/') }}" class="ff-btn" style="float:right; margin-top:-40px;">RETURN HOME</a>

    <table class="ff">
        <thead>
            <tr>
                <th class="ff">NAME</th>
                <th class="ff">PROGRESS (ATB)</th>
                <th class="ff">STATUS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr class="project-row">
                <td>
                    {{ strtoupper($project->title) }}
                    <div class="description-tooltip">{{ $project->description }}</div>
                </td>
                <td>
                    <div class="atb-container">
                        <div class="atb-fill" style="width: {{ $project->progress ?? 0 }}%"></div>
                    </div>
                </td>
                <td style="{{ ($project->status ?? 'ACTIVE') == 'KO' ? 'color: red;' : '' }}">
                    {{ $project->status ?? 'ACTIVE' }}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <hr style="border: 1px solid rgba(255,255,255,0.2); margin: 30px 0;">

    <div style="text-align:center;">
        <a href="{{ route('dashboard') }}" class="ff-btn">CREATE QUEST (on Dashboard)</a>
    </div>
</div>

@endsection

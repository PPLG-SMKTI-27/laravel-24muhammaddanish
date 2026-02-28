@extends('layouts.app')

@section('content')

    <!-- page header similar to layout's header -->
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    {{-- show current user and role for debugging --}}
                    <p class="text-sm text-gray-600 dark:text-gray-400" style="margin-top:8px;">
                        {{ 'user: '.auth()->user()->name.' ('.auth()->user()->role.')' }}
                    </p>

                    <div style="margin-top:20px;">
                        <style>
                            @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
                            .ff-window{background:linear-gradient(180deg,#0000ad 0%,#000021 100%);border:4px solid #f0f0f0;border-radius:10px;box-shadow:0 0 0 2px #000,0 0 0 5px #666;padding:25px;max-width:900px;margin:20px auto;color:#fff;font-family:'Press Start 2P',cursive}
                            .ff-btn{background:none;border:2px solid transparent;color:#fff;cursor:pointer;font-family:inherit;font-size:0.8rem;padding:5px 10px}
                            input.ff,textarea.ff,select.ff{background:rgba(0,0,0,0.5);border:1px solid #fff;color:#fff;padding:8px;font-family:inherit;font-size:0.6rem;margin-bottom:10px}
                            /* make table cells easier to see */
                            table.ff th, table.ff td { border:1px solid #fff; padding:4px 6px; }
                        </style>

                        <div class="ff-window">
                            <h3 style="color:#ffff00;margin-bottom:12px">SUMMON NEW QUEST</h3>
                            <form action="{{ route('projects.store') }}" method="POST">
                                @csrf
                                <input class="ff" type="text" name="name" placeholder="NEW QUEST NAME" required style="width:100%; display:block; margin-bottom:8px;">
                                <input class="ff" type="number" name="progress" placeholder="0" style="width:80px; display:inline-block;">
                                <select name="status" class="ff" style="display:inline-block; margin-left:8px;">
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="POISON">POISON</option>
                                    <option value="KO">KO</option>
                                </select>
                                <textarea class="ff" name="description" placeholder="QUEST DESCRIPTION" style="width:100%; height:80px; margin-top:8px;"></textarea>
                                <br>
                                <button type="submit" class="ff-btn">SUMMON PROJECT</button>
                            </form>
                            
                            <hr style="border: 1px solid rgba(255,255,255,0.2); margin: 20px 0;">

                            <h3 style="color:#ffff00;margin-bottom:12px">MANAGE QUESTS</h3>
                            @if($projects->isEmpty())
                                <p class="text-white" style="margin-top:12px;">No quests are currently in the database.</p>
                            @else
                            <table class="ff" style="margin-top:8px;">
                                <thead>
                                    <tr>
                                        <th class="ff">NAME</th>
                                        <th class="ff">PROGRESS</th>
                                        <th class="ff">STATUS</th>
                                        <th class="ff">COMMAND</th>
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
                                        <td>
                                            <a href="{{ route('projects.edit', $project) }}" class="ff-btn">MODIFY</a>
                                            <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ff-btn" onclick="return confirm('KO this quest?')" style="color:#ff6666">KO</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

it('allows guests to view the list and details', function () {
    $project = Project::factory()->create();

    $this->get(route('projects.index'))
        ->assertStatus(200)
        ->assertSee($project->title);

    $this->get(route('projects.show', $project))
        ->assertStatus(200)
        ->assertSee($project->description);
});

it('lets authenticated user create update and delete a project', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $data = [
        'title' => 'Test project',
        'category' => 'demo',
            'filter_category' => 'demo_filter',
        'description' => 'Some description',
    ];

    $this->post(route('projects.store'), $data)
        ->assertRedirect(route('dashboard'));

    $this->assertDatabaseHas('projects', ['title' => 'Test project']);
    $project = Project::where('title','Test project')->first();

    $this->put(route('projects.update', $project), ['title'=>'Updated','category'=>'demo','filter_category'=>'demo_filter','description'=>'desc'])
        ->assertRedirect(route('dashboard'));
    $this->assertDatabaseHas('projects', ['title'=>'Updated']);

    $this->delete(route('projects.destroy', $project))
        ->assertRedirect(route('dashboard'));
    $this->assertDatabaseMissing('projects', ['id'=>$project->id]);
});


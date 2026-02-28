<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'category' => $this->faker->word,
            'filter_category' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'icon' => null,
            'image' => null,
            'progress' => $this->faker->numberBetween(0,100),
            'status' => $this->faker->randomElement(['ACTIVE','POISON','KO']),
            'demo_url' => $this->faker->url,
            'source_url' => $this->faker->url,
        ];
    }
}

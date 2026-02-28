<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // special admin user
        User::factory()->create([
            'name' => 'sephiroth',
            'email' => 'sephiroth@example.com',
            'password' => bcrypt('materia123'),
            'role' => 'admin',
        ]);

        // also generate some sample projects via factory
        $this->call(ProjectSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     // 'email' => 'test@com',
        // ]);

        $this->call([
            PostSeeder::class,
        ]);

        // Author::updateOrCreate(
        //     ['name' => 'admin'],
        //     ['name' => 'admin']
        // );
    }
}

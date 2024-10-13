<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;  // Pastikan model Post Anda berada di namespace ini
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 100 dummy data untuk posts
        Post::factory()->count(23)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // =============== Without Chunking =================================
        // Post::factory()->count(5000)->create();


        // =============== Without Chunking =================================

        $chunkSize = 500;
        $total = 5000;

        for ($i = 0; $i < $total / $chunkSize; $i++){

        // .make() creates model instances, .toArray() converts to plain array
        $posts = Post::factory()->count($chunkSize)->make()->toArray();

        // Insert all $chunkSize records at once using a single SQL query
        Post::insert($posts);
        }
    }
}

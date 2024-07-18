<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Rating;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Article::factory()->count(10)->create();
        Video::factory()->count(10)->create();
        Image::factory()->count(10)->create();
        Comment::factory()->count(40)->create();
        Rating::factory()->count(20)->create();
    }
}

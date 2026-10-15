<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(8)->create();

        User::factory(10)->has(Profile::factory())->create();

        Article::factory(20)->create();

        Comment::factory(20)->create();

        /**User::factory()->create([
            'full_name' => 'Test User',
            'email' => 'test@example.com',
        ]);**/
    }
}

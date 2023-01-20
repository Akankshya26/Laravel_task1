<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Video;
use App\Models\article;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);\
        //article::factory(10)->create();
        //many to many
        // Tag::factory(10)->create();
        // Video::factory(50)->create();
        // Post::factory(10)->create();
        // $this->call(PostVideoSeeder::class);

    }
}

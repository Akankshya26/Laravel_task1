<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = Video::get();
        $posts = Post::get();

        foreach ($posts as $post) {
            $tag = Tag::get()->random()->first();
            $post->tags()->save($tag);
        }
        foreach ($videos as $video) {
            $tag = Tag::get()->random()->first();
            $video->tags()->save($tag);
        }
    }
}

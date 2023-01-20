<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index()
    // {
    //     $video = Video::with('tags')->first();
    //     dd($video->toArray());
    // }

    // public function show_post()
    // {
    //     $post = Post::with('tags')->first();
    //     dd($post->toArray());
    // }
    public function upload(Request $request)
    {
        echo "<pre>";
        // print_r($request->all());
        // echo $request->file('image')->store('uploads');


        $path = $request->file('image')->store('uploads');

        return $path;
    }
    // public function store(Request $request)
    // {

    //     $file = $request->file('image')->store('uploads');
    //     return back();
    // }
}

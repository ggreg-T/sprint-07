<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FrontController extends Controller
{
    public function welcome()
    {
        $post = Post::latest('id')->first();
        return view('welcome', compact('post'));
    }
}

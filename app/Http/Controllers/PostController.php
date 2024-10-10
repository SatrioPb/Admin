<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('status', 'published')->get();

        $postcount = Post::count();

        return view('Post/post', compact('post', 'postcount'));
    }

}

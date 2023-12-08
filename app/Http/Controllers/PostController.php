<?php

use App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }
}

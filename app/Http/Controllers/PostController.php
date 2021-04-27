<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @param Post $post
     * @return Response
     */

    public function create(Post $post)
    {
        return view('post.postbug', compact('post'));
    }
}

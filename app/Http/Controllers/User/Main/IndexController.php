<?php

namespace App\Http\Controllers\User\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        $posts = auth()->user()->likedPosts;
        return view('user.main.index', compact('comments', 'posts'));
    }
}

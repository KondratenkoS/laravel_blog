<?php

namespace App\Http\Controllers\User\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        return view('user.comment.index', compact('comments'));
    }
}

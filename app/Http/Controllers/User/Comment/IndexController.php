<?php

namespace App\Http\Controllers\User\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('user.comment.index');
    }
}

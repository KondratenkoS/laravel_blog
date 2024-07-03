<?php

namespace App\Http\Controllers\User\Like;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('user.like.index');
    }
}

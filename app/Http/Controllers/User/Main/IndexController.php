<?php

namespace App\Http\Controllers\User\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('user.main.index');
    }
}

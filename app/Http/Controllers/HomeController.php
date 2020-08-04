<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //$posts = Post::take(8)->get();;
        return view('user.home');
    }
}


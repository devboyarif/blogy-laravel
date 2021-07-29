<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $latests_posts = Post::latest()->take(6)->get();

        return view('website.index', [
            'latests_posts' => $latests_posts
        ]);
    }
}

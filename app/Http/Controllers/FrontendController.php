<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::query();

        $latest_posts = $posts->latest()->take(6)->get();
        $featured_posts = $posts->inRandomOrder()->where('featured', true)->take(4)->get();
        $top_posts = $posts->latest('view_count')->take(6)->get();

        return view('website.index', [
            'latest_posts' => $latest_posts,
            'featured_posts' => $featured_posts,
            'top_posts' => $top_posts,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::query();

        $latest_posts = $posts->withCategory()->latest()->take(6)->get();
        $featured_posts = $posts->withCategory()->status(true)->inRandomOrder()->where('featured', true)->take(4)->get();
        $top_posts = $posts->withCategory()->latest('view_count')->take(6)->get();
        $tags = Tag::all(['id', 'name', 'slug']);
        return $featured_categories = Category::get(['id', 'name', 'slug']);

        return view('website.index', [
            'latest_posts' => $latest_posts,
            'featured_posts' => $featured_posts,
            'top_posts' => $top_posts,
            'tags' => $tags,
            'featured_categories' => $featured_categories,
        ]);
    }
}

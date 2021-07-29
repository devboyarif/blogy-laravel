<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get(['id', 'name']);
        $tags = Tag::latest()->get(['id', 'name']);

        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // post create
        $post = Post::create($request->except(['thumbnail', 'tags']));

        // thumbnail store
        $url = uploadImage($request->thumbnail, 'posts');
        $post->update(['thumbnail' => $url]);

        // tags store
        $post->tags()->attach($request->tags);

        flashSuccess('Post Created Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::latest()->get(['id', 'name']);
        $tags = Tag::latest()->get(['id', 'name']);
        $post->load('tags:id,name', 'category:id,name');

        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // post update
        $post->update($request->except(['thumbnail', 'tags']));

        // thumbnail update
        if ($request->thumbnail) {
            deleteImage($post->thumbnail);
            $url = uploadImage($request->thumbnail, 'posts');
            $post->update(['thumbnail' => $url]);
        }

        // tags store
        $post->tags()->sync($request->tags);

        flashSuccess('Post Updated Successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

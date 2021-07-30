<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class AllPost extends Component
{
    public $all_posts;
    public $loadbutton = true, $total, $count = 4;


    public function render()
    {
        $posts =  Post::query();
        $this->all_posts = $posts->latest()->take($this->count)->get();
        $this->total = $posts->count();

        return view('livewire.post.all-post');
    }

    // Load More Data
    public function loadMore()
    {
        $this->count += 4;
    }
}

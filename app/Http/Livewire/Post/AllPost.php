<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class AllPost extends Component
{
    public $bigPost = true, $search = true;
    public $all_posts;
    public $loadbutton = true, $total, $count = 4;
    public $searchTerm, $isSearching = false;


    public function render()
    {
        $posts =  Post::query();

        if ($this->isSearching && $this->searchTerm) {
            $searchTerm = '%' . $this->searchTerm . '%';
            $this->all_posts = $posts->where('title', 'LIKE', $searchTerm)
                ->withCategory()
                ->latest()
                ->take($this->count)
                ->get();
        } else {
            $this->all_posts = $posts->withCategory()
                ->latest()
                ->take($this->count)
                ->get();
        }

        $this->total = $posts->count();
        return view('livewire.post.all-post');
    }

    public function searchitems()
    {
        if ($this->searchTerm) {
            $this->isSearching = true;
        } else {
            $this->isSearching = false;
        }
    }

    // Load More Data
    public function loadMore()
    {
        $this->count += 4;
    }
}

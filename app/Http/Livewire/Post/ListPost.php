<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use App\Traits\Notification;
use Livewire\Component;

class ListPost extends Component
{
    use Notification;

    public $posts;
    public $loadbutton = true, $total, $count = 5;

    public function render()
    {
        $this->posts = Post::latest()->take($this->count)->get();
        $this->total = Post::count();

        return view('livewire.post.list-post');
    }

    // Load More Data
    public function load()
    {
        $this->count += 5;
    }

    // Data Delete
    public function delete($id)
    {
        Post::findOrFail($id)->delete();
        $this->notifySuccess('Post Deleted Successfully');
    }

    // Data Status Change
    public function statusChange($id, $status)
    {
        Post::findOrFail($id)->update(['status' => $status]);

        if ($status) {
            $this->notifySuccess('Post Activated Changed');
        } else {
            $this->notifySuccess('Post Inactivated Changed');
        }
    }

    // Data Featured Status Change
    public function featuredChange($id, $status)
    {
        Post::findOrFail($id)->update(['featured' => $status]);

        if ($status) {
            $this->notifySuccess('Post Featured Successfully');
        } else {
            $this->notifySuccess('Post Unfeatured Successfully');
        }
    }
}

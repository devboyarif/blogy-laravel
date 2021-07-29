<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use App\Traits\Notification;
use Livewire\Component;

class ListPost extends Component
{
    use Notification;

    public $posts;

    public function render()
    {
        $this->posts = Post::latest()->get();
        return view('livewire.post.list-post');
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

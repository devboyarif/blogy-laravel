<?php

namespace App\Http\Livewire\Comment;

use App\Models\Comment as Commentt;
use Livewire\Component;

class Comment extends Component
{
    public $comments, $name, $email, $body, $post_id;
    public $loadbutton = true, $total, $count = 5;

    public function render()
    {
        $this->comments = Commentt::where('post_id', $this->post_id)
            ->latest()
            ->take($this->count)
            ->get();
        $this->total = Commentt::count();

        return view('livewire.comment.comment');
    }

    // Load More Data
    public function load()
    {
        $this->count += 5;
    }

    //reset form
    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->body = '';
    }

    // Store comment
    public function storeComment()
    {
        // data validation
        $this->validate([
            'name' => "required",
            'email' => "required",
            'body' => "required",
        ]);

        $data = [
            'post_id' => $this->post_id,
            'name' => $this->name,
            'email' => $this->email,
            'body' => $this->body,
        ];

        Commentt::create($data);
        $this->resetForm();
        session()->flash('success', 'Comment Posted Successful.');
        $this->emit('created');
    }
}

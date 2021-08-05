<?php

namespace App\Http\Livewire\Comment;

use App\Models\Comment as Commentt;
use Livewire\Component;

class Comment extends Component
{
    public $name, $email, $body, $post_id;

    public function render()
    {
        return view('livewire.comment.comment');
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
        $this->reset();
        session()->flash('success', 'Comment Posted Successful.');
        $this->emit('created');
    }
}

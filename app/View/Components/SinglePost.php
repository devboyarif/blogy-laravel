<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SinglePost extends Component
{
    public $post, $bigPost = true;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $bigPost)
    {
        $this->post = $post;
        $this->bigPost = $bigPost;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.single-post');
    }
}

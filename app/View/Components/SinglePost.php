<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SinglePost extends Component
{
    public $post, $bigPost, $column;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post, $bigPost  = true, $column = 'col-lg-6 col-md-6')
    {
        $this->post = $post;
        $this->bigPost = $bigPost;
        $this->column = $column;
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

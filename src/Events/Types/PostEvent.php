<?php namespace Jemy09\Forum\Frontend\Events\Types;

use Jemy09\Forum\Models\Post;

class PostEvent
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Create a new event instance.
     *
     * @param  Post  $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
}

<?php namespace Jemy09\Forum\Frontend\Events\Types;

use Jemy09\Forum\Models\Thread;

class ThreadEvent
{
    /**
     * @var Thread
     */
    public $thread;

    /**
     * Create a new event instance.
     *
     * @param  Thread  $thread
     */
    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }
}

<?php namespace Jemy09\Forum\Frontend\Events\Types;

use Jemy09\Forum\Models\Category;

class CategoryEvent
{
    /**
     * @var Category
     */
    public $category;

    /**
     * Create a new event instance.
     *
     * @param  Category  $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
}

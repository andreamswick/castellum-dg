<?php

namespace App\Events;

class DocsChanged
{

    public $page;

    /**
     * Create a new event instance.
     *
     * @param $page
     */
    public function __construct($page)
    {
        $this->page = $page;
    }
}

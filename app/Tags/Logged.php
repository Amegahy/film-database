<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Logged extends Tags
{
    
    /**
     * The {{ logged }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        return $_SESSION["logged"];
    }
}

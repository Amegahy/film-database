<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Logged extends Tags
{
    public function index()
    {
        return $_SESSION["logged"];
    }
}

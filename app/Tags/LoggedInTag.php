<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class LoggedInTag extends Tags
{
    protected static $handle = 'logged_in';

    public function index()
    {
        // Your PHP logic here to check if user is logged in
        if (isset($_SESSION['usr'])) {
            return true;
        } else {
            return false;
        }
    }
}

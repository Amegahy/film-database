<?php

namespace App\Tags;

use Statamic\Tags\Tags;
use Statamic\Facades\Entry;


class GetMemberPage extends Tags
{
    public function index()
    {
        $url = $this->params->get('url');
        $page = Statamic\Facades\Entry::findByUri($url);

        if ($page) {
            return $page->in('content')->get('members_only');
        }

        return '';
    }
}

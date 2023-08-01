<?php

namespace App\Collections;

use TightenCo\Jigsaw\Collection\CollectionItem;

class PostCollection extends CollectionItem
{
    public function getTags()
    {
        $tags = explode(',', $this->keywords) ?? [];

        return array_map('trim', $tags);
    }
}

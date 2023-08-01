<?php

namespace App\Collections;

use TightenCo\Jigsaw\PageVariable;

class PostTagsCollection
{
    private array $collection;

    public function __construct(private PageVariable $posts)
    {
        $this->build();
    }
    /**
     * Get the value of collection
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    private function build(): void
    {
        $array = [];
        foreach ($this->posts as $post) {
            if (empty($post->getTags())) {
                continue;
            }
            foreach ($post->getTags() as $tag) {
                $array[] = [
                    'tag' => $tag,
                    'post' => [
                        'title' => $post->title,
                        'path' => $post->getPath(),
                        'description' => $post->description ?? null,
                        'img' => $post->img ?? null
                    ]
                ];
            }
        }
        $collection = collect($array);
        $grouped = $collection->groupBy('tag');
        $this->collection = $grouped->all();
    }
}

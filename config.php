<?php

use Illuminate\Support\Str;
use App\Collections\PostCollection;
use App\Collections\PostTagsCollection;

return [
    'production' => false,
    'baseUrl' => '',
    'appName' => 'Jigsaw',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'keywords' => 'kw1, kw2',
    'getTagsCollection' => function ($page, $collection) {
        $tagsCollection = new PostTagsCollection($collection);
        return $tagsCollection->getCollection();
    },
    'collections' => [
        'pages' => [
            'filter' => function ($page) {
                return $page->published;
            },
            'path' => function ($page) {
                return 'pages/'  . Str::slug($page->getFilename());
            },
            'extends' => '_components.page.index',
            'section' =>  'content',
        ],
        'posts' => [
            'map'  => function ($post) {
                return PostCollection::fromItem($post);
            },
            'filter' => function ($post) {
                return $post->published;
            },
            'sort' => ['-date'],
            'path' => function ($post) {
                return 'blog/'  . Str::slug($post->getFilename());
            },
            'extends' => '_components.blog.post.index',
            'section' =>  'content',
        ],
        'categories' => [
            'path' => function ($category) {
                return 'blog/categories/'  . Str::slug($category->getFilename());
            },
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },

            'extends' => '_components.blog.category.index',
            'section' =>  'content',
        ],
    ],
];

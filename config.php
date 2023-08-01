<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [
        'pages' => [
            'filter' => function ($page) {
                return $page->published;
            },
            'path' => function ($page) {
                return 'pages/'  . Str::slug($page->getFilename());
            },
            'extends' => '_components.layouts.page',
            'section' =>  'content',
        ],
        'posts' => [
            'filter' => function ($post) {
                return $post->published;
            },
            'sort' => ['-date'],
            'path' => function ($post) {
                return 'blog/'  . Str::slug($post->getFilename());
            },
            'extends' => '_components.layouts.post',
            'section' =>  'content',
        ],
    ],
];

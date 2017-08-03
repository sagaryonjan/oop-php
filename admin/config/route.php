<?php
/**
 * Route Configuration
 */

return [

    'login' => [
        'url'  => 'login',
        'file' =>  'login'
    ],

    'dashboard' => [
        'url'   => 'dashboard',
        'file'   => 'dashboard',
    ],

    'category' => [
        'url'  => 'category',
        'action' => [
            'index' =>[
                'url'  => 'index',
                'file' => 'categories/index'
            ],

            'create' =>[
                'url'  => 'create',
                'file' => 'categories/create'
            ]
        ]
    ],

    'post' => [
        'url'  => 'post',
        'action' => [
            'index' =>[
                'url'  => 'index',
                'file' => 'posts/index'
            ],

            'create' =>[
                'url'  => 'create',
                'file' => 'posts/create'
            ]
        ]
    ],
    
];
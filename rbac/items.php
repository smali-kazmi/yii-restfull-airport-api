<?php
return [
    'create' => [
        'type' => 2,
        'description' => 'Can create',
    ],
    'update' => [
        'type' => 2,
        'description' => 'Can update',
    ],
    'delete' => [
        'type' => 2,
        'description' => 'Can delete',
    ],
    'read' => [
        'type' => 2,
        'description' => 'Can read',
    ],
    'user' => [
        'type' => 1,
        'children' => [
            'create',
            'read',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'update',
            'delete',
            'user',
        ],
    ],
];

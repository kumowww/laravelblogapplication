<?php

return [
    'paths' => [
        resource_path('views'),
    ],
    'compiled' => env('VIEW_COMPILED_PATH', storage_path('framework/views')),
    'relative_hash' => false,
    'cache' => true,
];
<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath('/tmp');

$storageFolders = [
    '/tmp/framework/views',
    '/tmp/framework/cache/data',
    '/tmp/framework/sessions',
];

foreach ($storageFolders as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');

$paths = [
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs'
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

$artisan = $app->make(Illuminate\Contracts\Console\Kernel::class);
$artisan->call('config:cache');
$artisan->call('route:cache');
$artisan->call('view:cache');
$artisan->call('migrate', ['--force' => true]);

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
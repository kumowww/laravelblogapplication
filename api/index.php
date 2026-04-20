<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');

$paths = [
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache'
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

$app->singleton('files', function () {
    return new Illuminate\Filesystem\Filesystem;
});

$app->singleton('config', function () use ($app) {
    $config = new Illuminate\Config\Repository();
    $config->set('app', [
        'key' => 'base64:2ZqU8Xh9LpV3mN7rT5wY1kC4bJ6sF0gH2aD8eK9nM=',
        'cipher' => 'AES-256-CBC',
        'debug' => true,
        'url' => env('APP_URL', 'https://laravelblogapplication.vercel.app'),
        'timezone' => 'UTC',
        'locale' => 'en',
        'fallback_locale' => 'en',
        'faker_locale' => 'en_US',
    ]);
    $config->set('view', [
        'paths' => [__DIR__ . '/../resources/views'],
        'compiled' => '/tmp/storage/framework/views',
    ]);
    $config->set('session', [
        'driver' => 'file',
        'files' => '/tmp/storage/framework/sessions',
        'cookie' => 'laravel_session',
        'path' => '/',
        'domain' => null,
        'secure' => true,
        'http_only' => true,
        'same_site' => 'lax',
    ]);
    return $config;
});

$app->alias('config', Illuminate\Config\Repository::class);

$app->register(Illuminate\View\ViewServiceProvider::class);
$app->register(Illuminate\Filesystem\FilesystemServiceProvider::class);
$app->register(Illuminate\Session\SessionServiceProvider::class);

try {
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    
    $response->send();
    
    $kernel->terminate($request, $response);
} catch (\Exception $e) {
    http_response_code(500);
    echo 'Error: ' . $e->getMessage() . '<br>';
    echo 'File: ' . $e->getFile() . '<br>';
    echo 'Line: ' . $e->getLine() . '<br>';
    echo 'Trace: <pre>' . $e->getTraceAsString() . '</pre>';
}
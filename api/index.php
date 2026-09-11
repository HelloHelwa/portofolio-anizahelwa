<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

error_log('=== api/index.php STARTED ===');

// Pastikan vendor ter-deploy
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo '<pre>FATAL: vendor/autoload.php NOT FOUND at ' . htmlspecialchars($autoload) . "\n";
    echo "Kemungkinan besar 'composer install' belum jalan saat build.\n";
    echo "Cek Build Command di Vercel Project Settings.</pre>";
    exit;
}

// Siapkan folder writable di /tmp (Vercel filesystem read-only kecuali /tmp)
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        if (!mkdir($dir, 0777, true) && !is_dir($dir)) {
            error_log("Failed to create dir: $dir");
        }
    }
}

// Arahkan semua cache/compile Laravel ke /tmp
$_ENV['APP_CONFIG_CACHE']    = '/tmp/config.php';
$_ENV['APP_EVENTS_CACHE']    = '/tmp/events.php';
$_ENV['APP_PACKAGES_CACHE']  = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE']    = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE']  = '/tmp/services.php';
$_ENV['VIEW_COMPILED_PATH']  = '/tmp/storage/framework/views';
$_ENV['CACHE_STORE']         = 'array';
$_ENV['SESSION_DRIVER']      = 'cookie';
$_ENV['LOG_CHANNEL']         = 'stderr';

putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_EVENTS_CACHE=/tmp/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// Bersihkan cache lama hasil build lokal yang mungkin ikut ter-deploy
// (bootstrap/cache/*.php dengan path absolut lokal bisa bikin crash)
$staleCache = [
    __DIR__ . '/../bootstrap/cache/config.php',
    __DIR__ . '/../bootstrap/cache/routes-v7.php',
    __DIR__ . '/../bootstrap/cache/services.php',
    __DIR__ . '/../bootstrap/cache/packages.php',
    __DIR__ . '/../bootstrap/cache/events.php',
];
foreach ($staleCache as $file) {
    if (file_exists($file) && !is_writable(dirname($file))) {
        error_log("WARNING: stale cache exists and dir not writable: $file");
    }
}

try {
    require __DIR__ . '/../public/index.php';
} catch (Throwable $e) {
    error_log('=== LARAVEL ERROR ===');
    error_log('Message: ' . $e->getMessage());
    error_log('File: ' . $e->getFile());
    error_log('Line: ' . $e->getLine());
    error_log('Trace: ' . $e->getTraceAsString());

    http_response_code(500);

    echo '<pre>';
    echo 'Laravel Error: ' . htmlspecialchars($e->getMessage()) . "\n\n";
    echo 'File: ' . htmlspecialchars($e->getFile()) . "\n";
    echo 'Line: ' . $e->getLine() . "\n\n";
    echo 'Trace:' . "\n";
    echo htmlspecialchars($e->getTraceAsString());
    echo '</pre>';
}
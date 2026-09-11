<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('memory_limit', '256M');

error_log('=== api/index.php STARTED ===');

register_shutdown_function(function () {
    $error = error_get_last();
    if ($error !== null && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        error_log('=== FATAL SHUTDOWN ERROR ===');
        error_log('Type: ' . $error['type']);
        error_log('Message: ' . $error['message']);
        error_log('File: ' . $error['file']);
        error_log('Line: ' . $error['line']);

        if (!headers_sent()) {
            http_response_code(500);
            header('Content-Type: text/plain');
        }
        echo "FATAL ERROR CAUGHT BY SHUTDOWN HANDLER\n\n";
        echo 'Message: ' . $error['message'] . "\n";
        echo 'File: ' . $error['file'] . "\n";
        echo 'Line: ' . $error['line'] . "\n";
    }
});

$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo '<pre>FATAL: vendor/autoload.php NOT FOUND at ' . htmlspecialchars($autoload) . "\n";
    echo "Kemungkinan besar 'composer install' belum jalan saat build.\n";
    echo "Cek Build Command di Vercel Project Settings.</pre>";
    exit;
}

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
        mkdir($dir, 0777, true);
    }
}

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

try {
    error_log('=== ABOUT TO REQUIRE public/index.php ===');
    require __DIR__ . '/../public/index.php';
    error_log('=== FINISHED public/index.php ===');
} catch (Throwable $e) {
    error_log('=== LARAVEL ERROR (CAUGHT) ===');
    error_log('Message: ' . $e->getMessage());
    error_log('File: ' . $e->getFile());
    error_log('Line: ' . $e->getLine());
    error_log('Trace: ' . $e->getTraceAsString());

    if (!headers_sent()) {
        http_response_code(500);
    }
    echo '<pre>';
    echo 'Laravel Error: ' . htmlspecialchars($e->getMessage()) . "\n\n";
    echo 'File: ' . htmlspecialchars($e->getFile()) . "\n";
    echo 'Line: ' . $e->getLine() . "\n\n";
    echo htmlspecialchars($e->getTraceAsString());
    echo '</pre>';
}
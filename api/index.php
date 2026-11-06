<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    $storagePath = '/tmp/storage';

    $directories = [
        $storagePath,
        $storagePath . '/framework',
        $storagePath . '/framework/views',
        $storagePath . '/framework/cache',
        $storagePath . '/framework/cache/data',
        $storagePath . '/framework/sessions',
        $storagePath . '/logs',
        $storagePath . '/bootstrap',
        $storagePath . '/bootstrap/cache',
    ];

    foreach ($directories as $dir) {
        if (!is_dir($dir)) {
            @mkdir($dir, 0777, true);
        }
    }

    putenv("APP_CONFIG_CACHE={$storagePath}/framework/config.php");
    putenv("APP_EVENTS_CACHE={$storagePath}/framework/events.php");
    putenv("APP_PACKAGES_CACHE={$storagePath}/framework/packages.php");
    putenv("APP_ROUTES_CACHE={$storagePath}/framework/routes.php");
    putenv("APP_SERVICES_CACHE={$storagePath}/framework/services.php");
    putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");

    $_ENV['APP_CONFIG_CACHE'] = "{$storagePath}/framework/config.php";
    $_ENV['APP_EVENTS_CACHE'] = "{$storagePath}/framework/events.php";
    $_ENV['APP_PACKAGES_CACHE'] = "{$storagePath}/framework/packages.php";
    $_ENV['APP_ROUTES_CACHE'] = "{$storagePath}/framework/routes.php";
    $_ENV['APP_SERVICES_CACHE'] = "{$storagePath}/framework/services.php";
    $_ENV['VIEW_COMPILED_PATH'] = "{$storagePath}/framework/views";

    if (empty(getenv('APP_KEY')) && empty($_ENV['APP_KEY'])) {
        putenv('APP_KEY=base64:nkdYvSw0p/sQEcKodnpcbzpLS+Aa+PoHUmmKwjJ9iFU=');
        $_ENV['APP_KEY'] = 'base64:nkdYvSw0p/sQEcKodnpcbzpLS+Aa+PoHUmmKwjJ9iFU=';
    }

    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/html; charset=utf-8');
    echo "<div style='font-family: sans-serif; padding: 30px; background: #fff5f5; color: #c53030;'>";
    echo "<h2 style='margin-top: 0;'>Application Error on Vercel</h2>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " (Line " . $e->getLine() . ")</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre style='background: #2d3748; color: #f7fafc; padding: 15px; border-radius: 8px; overflow-x: auto;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</div>";
    exit;
}

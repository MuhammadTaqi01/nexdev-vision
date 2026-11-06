<?php

// Check if running on Vercel or Serverless
$storagePath = '/tmp/storage';

foreach ([
    $storagePath,
    $storagePath . '/framework',
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/logs',
] as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
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

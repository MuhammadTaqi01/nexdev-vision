<?php

if (isset($_GET['phpinfo']) || (isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], 'test-php') !== false)) {
    header('Content-Type: text/html');
    echo "<h1>PHP is working on Vercel!</h1>";
    echo "<p>PHP Version: " . PHP_VERSION . "</p>";
    echo "<p>/tmp writable: " . (is_writable('/tmp') ? 'Yes' : 'No') . "</p>";
    exit;
}

// Suppress deprecations so Laravel 8 runs on newer PHP without converting notices to fatal ErrorExceptions
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED & ~E_NOTICE);
ini_set('display_errors', '1');

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/html; charset=utf-8');
    echo "<div style='font-family: sans-serif; padding: 30px; background: #fff5f5; color: #c53030;'>";
    echo "<h2>Laravel Error on Vercel:</h2>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " (Line " . $e->getLine() . ")</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre style='background: #2d3748; color: #f7fafc; padding: 15px; border-radius: 8px; overflow-x: auto;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</div>";
    exit;
}

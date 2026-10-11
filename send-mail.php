<?php
/**
 * NexDev Vision — contact form mailer.
 * Deploy this file together with index.html on any PHP hosting (cPanel / shared hosting).
 */
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

$TO = 'nexdev.vision@gmail.com';

function clean_field($value) {
    $value = trim((string) $value);
    // strip header-injection characters
    return str_replace(["\r", "\n", "\0"], '', $value);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'POST requests only.']);
    exit;
}

$name    = clean_field($_POST['name']    ?? '');
$email   = clean_field($_POST['email']   ?? '');
$service = clean_field($_POST['service'] ?? 'Not specified');
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Name, valid email and message are required.']);
    exit;
}

if (mb_strlen($message) > 5000) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Message too long.']);
    exit;
}

$host = clean_field($_SERVER['HTTP_HOST'] ?? 'localhost');
$host = preg_replace('/[^a-z0-9.\-]/i', '', $host) ?: 'localhost';

$subject = 'New project inquiry — NexDev Vision [' . $service . ']';
$body    = "Name:    {$name}\n"
         . "Email:   {$email}\n"
         . "Service: {$service}\n\n"
         . "Message:\n{$message}\n\n"
         . "--\nSent from the NexDev Vision website ({$host}).\n";

$headers = 'From: NexDev Vision Website <website@' . $host . ">\r\n"
         . 'Reply-To: ' . $name . ' <' . $email . ">\r\n"
         . 'MIME-Version: 1.0' . "\r\n"
         . 'Content-Type: text/plain; charset=UTF-8' . "\r\n"
         . 'X-Mailer: NexDevVisionSite';

$sent = mail($TO, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'mail() failed on the server.']);
}

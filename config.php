<?php
// Database config - using credentials you provided
$DB_HOST = 'localhost';
$DB_NAME = 'dbywwbeqrs0pxe';
$DB_USER = 'uei4bkjtcem6s';
$DB_PASS = 'wmhalmspfjgz';
 
try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (Exception $e) {
    // In production don't echo sensitive info
    http_response_code(500);
    echo json_encode(['status'=>'error','message'=>'Database connection failed']);
    exit;
}

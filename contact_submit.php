<?php
// Handles contact form submission and saves to DB (returns JSON)
header('Content-Type: application/json');
 
// basic server-side validation
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
 
if(!$name || !$email || !$message){
    echo json_encode(['status'=>'error','message'=>'Please fill required fields.']);
    exit;
}
 
require_once 'config.php';
 
try {
    $stmt = $pdo->prepare("INSERT INTO contacts (name,email,subject,message) VALUES (:name,:email,:subject,:message)");
    $stmt->execute([
        ':name'=>$name,
        ':email'=>$email,
        ':subject'=>$subject,
        ':message'=>$message
    ]);
    echo json_encode(['status'=>'ok']);
} catch (Exception $e) {
    // In production, log $e->getMessage() internally instead of exposing
    echo json_encode(['status'=>'error','message'=>'Database insert failed.']);
}

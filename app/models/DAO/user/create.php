<?php
require_once __DIR__ . '/../../connection.php';

function createUser($username, $email, $password, $session_id){    
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash, session) VALUES (:username, :email, :password_hash, :session_id)");

    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':password_hash' => $password,
        ':session_id' => $session_id
    ]);
    echo "user created";
    return $pdo->lastInsertId();
}

?>
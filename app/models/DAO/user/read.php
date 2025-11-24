<?php
require_once __DIR__ . '/../../connection.php';

function emailAlreadyExists($email) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
    $stmt->execute([$email]);

    return $stmt->fetch() !== false;
}

function usernameAlreadyExists($username){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
    $stmt->execute([$username]);

    return $stmt->fetch() !== false;
}

function isUserValid($username, $password_hash){
    global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password_hash = :password_hash LIMIT 1");
    $stmt->execute([
        ":username" => $username,
        ":password_hash" => $password_hash]);

    return $stmt->fetch() !== false;
}

function getUserIdByUsername($username){
    global $pdo;
    
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username LIMIT 1");
    $stmt->execute([":username" => $username]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result['id'] : null; 
}

function getUserByUsername($username){
    global $pdo;
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
    $stmt->execute([":username" => $username]);
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUserById($id){
    global $pdo;
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $stmt->execute([":id" => $id]);
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
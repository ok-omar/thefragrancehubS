<?php
require_once __DIR__ . '/../../connection.php';

function setNewUserSessionId($id, $new_session_id){
    global $pdo;
    
    $stmt = $pdo->prepare("UPDATE users SET session = :new_session_id WHERE id = :id");
    $stmt->execute([
        ":new_session_id" => $new_session_id,
        ":id" => $id
    ]);
    
    return $stmt->rowCount() > 0;
}



?>
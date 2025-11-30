<?php

function deleteAllfragrances($pdo) {
    $stmt = $pdo->prepare("DELETE FROM fragrances");
    $stmt->execute();
}

function deleteFragranceById($pdo, $id) {
    $stmt = $pdo->prepare("DELETE FROM fragrances WHERE id = :id");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}

?>
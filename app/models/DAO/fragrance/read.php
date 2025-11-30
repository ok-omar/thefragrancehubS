<?php

function getAllfragrances($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM fragrances");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFragranceInRange($pdo, $start, $offset) {
    $start = (int) $start;
    $offset = (int) $offset;

    $stmt = $pdo->prepare("SELECT * FROM fragrances LIMIT $start, $offset");
    $stmt->execute();

    return $stmt->fetchAll();
}

function getFragranceById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM fragrances WHERE id = :id LIMIT 1");
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch();
}


?>
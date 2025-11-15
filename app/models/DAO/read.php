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


?>
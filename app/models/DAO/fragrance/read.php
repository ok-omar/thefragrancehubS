<?php

function getAllfragrances($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM fragrances");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFragranceInRange($pdo, $start, $offset, $order) {
    $start = (int) $start;
    $offset = (int) $offset;

    $orderMap = [
        "default"  => "",
        "price-asc"  => "ORDER BY price ASC",
        "price-desc" => "ORDER BY price DESC",
        "name-asc"   => "ORDER BY name ASC",
        "name-desc"  => "ORDER BY name DESC",
    ];

    $statementString = $orderMap[$order] ?? "";

    $stmt = $pdo->prepare("SELECT * FROM fragrances $statementString LIMIT $start, $offset");
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
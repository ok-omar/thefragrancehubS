<?php

function updateFragrance($pdo, $currentId, array $data) {
    $sql = 'UPDATE fragrances SET name = :name, brand = :brand, image_url = :image_url,
            gender = :gender, price = :price, longevity = :longevity, sillage = :sillage WHERE id = :current_id';

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $data['name']);
    $stmt->bindValue(':brand', $data['brand']);
    $stmt->bindValue(':image_url', $data['image_url'], $data['image_url'] === null ? PDO::PARAM_NULL : PDO::PARAM_STR);
    $stmt->bindValue(':gender', $data['gender']);
    $stmt->bindValue(':price', $data['price'], $data['price'] === null ? PDO::PARAM_NULL : PDO::PARAM_STR);
    $stmt->bindValue(':longevity', $data['longevity'], $data['longevity'] === null ? PDO::PARAM_NULL : PDO::PARAM_STR);
    $stmt->bindValue(':sillage', $data['sillage'], $data['sillage'] === null ? PDO::PARAM_NULL : PDO::PARAM_STR);
    $stmt->bindValue(':current_id', $currentId, PDO::PARAM_INT);

    $stmt->execute();
    return $stmt->rowCount() > 0;
}
?>

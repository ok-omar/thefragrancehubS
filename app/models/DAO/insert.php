<?php

function insertFragrancesFromJson($pdo, $jsonFilePath) {
    if (!file_exists($jsonFilePath)) {
        die("JSON file not found: " . $jsonFilePath);
    }

    $jsonData = file_get_contents($jsonFilePath);
    $data = json_decode($jsonData, true);

    if (!is_array($data)) {
        die("Invalid JSON format in file: " . $jsonFilePath);
    }

    $stmt = $pdo->prepare("
        INSERT INTO fragrances (name, brand, image_url, gender, price, longevity, sillage)
        VALUES (:name, :brand, :image_url, :gender, :price, :longevity, :sillage)
    ");

    foreach ($data as $item) {
        $stmt->execute([
            ':name' => $item['Name'] ?? null,
            ':brand' => $item['Brand'] ?? null,
            ':image_url' => $item['Image URL'] ?? null,
            ':gender' => $item['Gender'] ?? null,
            ':price' => $item['Price'] ?? null,
            ':longevity' => $item['Longevity'] ?? null,
            ':sillage' => $item['Sillage'] ?? null
        ]);
    }

    echo "Inserted " . count($data) . " fragrance records from {$jsonFilePath}.";
}
?>


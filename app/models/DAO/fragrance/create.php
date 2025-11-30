<?php
function createFragrance($pdo, array $data) {
    // Prepare values
    $name = $data['name'];
    $brand = $data['brand'];
    $image_url = $data['image_url'] ?? null;
    $gender = $data['gender'] ?? 'unisex';
    $price = $data['price'];
    $longevity = $data['longevity'] ?? null;
    $sillage = $data['sillage'] ?? null;

    // Insert the fragrance    
    $stmt = $pdo->prepare('
        INSERT INTO fragrances (name, brand, image_url, gender, price, longevity, sillage) 
        VALUES (:name, :brand, :image_url, :gender, :price, :longevity, :sillage)
    ');

    $stmt->execute([
        ':name' => $name,
        ':brand' => $brand,
        ':image_url' => $image_url,
        ':gender' => $gender,
        ':price' => $price,
        ':longevity' => $longevity,
        ':sillage' => $sillage
    ]);

    // Return the new fragrance ID
    return (int) $pdo->lastInsertId();
}

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


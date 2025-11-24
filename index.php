<?php
require_once __DIR__ . '/app/controllers/common.php';
session_start();

require_once __DIR__ . '/app/models/connection.php';
require_once __DIR__ . '/app/models/DAO/fragrance/create.php';
require_once __DIR__ . '/app/models/DAO/fragrance/delete.php';

$action = $_GET['action'] ?? null;
$error = $_GET['error'] ?? null;
$files_imported = [];
$files_to_import = array_diff(scandir(__DIR__ . '/app/models/data/'), ['.', '..']);
shuffle($files_to_import);


if ($action == "filldb") {
    if (count($files_imported) != 0) {
        echo "Files already imported: " . print_r($files_imported, true) . "<br>";
        return;
    }
    echo "Files to import: " . print_r($files_to_import, true) . "<br>";
    
    foreach ($files_to_import as $file) {
        try {
            insertFragrancesFromJson($pdo, __DIR__ . '/app/models/data/' . $file);
            echo "✓ Successfully imported: {$file}<br>";
        } catch (Exception $e) {
            echo "✗ Error importing {$file}: " . $e->getMessage() . "<br>";
        }
    }

    echo "<h1 style='color: red;'>You will be redirected to homepage in 3 seconds...</h1>";
    sleep(20);
    header("Location: controllers/charts.php");
    exit;

} elseif ($action == "delete") {
    deleteAllfragrances($pdo);
    include 'index.view.php';
} elseif ($action == "charts"){
    include 'app/controllers/charts.php';
} elseif ($action == "login") {
    include 'app/controllers/auth.php';
} elseif ($action == "register") {
    include 'app/controllers/auth.php';
} elseif ($action == "resetpassword") {
    include 'app/controllers/resetpassword.php';
} else {
    include 'index.view.php';
}

if ($error == 'session_expired') {
    echo "<script>alert('Session expired... you will be redirected to the homepage');</script>";
}
?>
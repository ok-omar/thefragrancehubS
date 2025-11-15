<?php
require_once __DIR__ . '/app/models/connection.php';
require_once __DIR__ . '/app/models/DAO/insert.php';
require_once __DIR__ . '/app/models/DAO/delete.php';

$action = $_GET['action'] ?? null;
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
    header("Location: controllers/homepage.php");
    exit;

} elseif ($action == "delete") {
    deleteAllfragrances($pdo);
    include 'index.view.php';
} elseif ($action == "charts"){
    header("Location: app/controllers/charts.php");
} elseif ($action == "login") {
    $_GET['mode'] = 'login';
    include 'app/controllers/auth.php';
} elseif ($action == "register") {
    $_GET['mode'] = 'register';
    include 'app/controllers/auth.php';
} else {
    include 'index.view.php';
}



?>
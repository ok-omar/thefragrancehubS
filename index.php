<?php
require_once __DIR__ . '/app/controllers/common.php';
require_once __DIR__ . '/app/models/connection.php';
require_once __DIR__ . '/app/models/DAO/fragrance/create.php';
require_once __DIR__ . '/app/models/DAO/fragrance/delete.php';

$action = $_GET['action'] ?? null;
$error = $_GET['error'] ?? null;
$files_imported = [];
$files_to_import = array_diff(scandir(__DIR__ . '/app/models/data/'), ['.', '..']);
shuffle($files_to_import);


switch ($action) {
    case "filldb":
        if (count($files_imported) != 0) {
            echo "Files already imported: " . print_r($files_imported, true) . "<br>";
            break;
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
        header("Location: app/controllers/charts.php");
        exit;

    case "delete":
        deleteAllfragrances($pdo);
        require 'index.view.php';
        break;

    case "delete_fragrance":
        require_once __DIR__ . '/app/controllers/common.php';
        require_once __DIR__ . '/app/models/DAO/fragrance/delete.php';
        
        // Check if user is logged in
        if (!isLoggedIn()) {
            header("Location: index.php?action=login");
            exit;
        }
        
        // Get the fragrance ID
        $id = $_GET['id'] ?? $_POST['id'] ?? null;
        
        if ($id) {
            deleteFragranceById($pdo, $id);
        }
        
        // Redirect back to charts page
        header("Location: index.php?action=charts");
        exit;

    case "charts":
        header("Location: app/controllers/charts.php");
        break;

    case "fragrance":
        $id = $_GET['id'] ?? ''; 
        header("Location: app/controllers/fragrance.php?id=" . urlencode($id));
        exit;

    case "login":
    case "register":
        require 'app/controllers/auth.php';
        break;

    case "resetpassword":
        require 'app/controllers/resetpassword.php';
        break;

    case 'logout':
        header('Location: app/controllers/logout.php');
        exit;

    case 'session_expired':
        header('Location: app/controllers/expired.php');
        exit;

    default:
        require 'index.view.php';
        break;
}

?>
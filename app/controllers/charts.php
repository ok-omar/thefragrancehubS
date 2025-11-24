<?php
require_once __DIR__ . '/../models/connection.php';
require_once __DIR__ . '/../models/DAO/user/read.php';
require_once __DIR__ . '/../models/DAO/fragrance/read.php';
require_once __DIR__ . '/common.php';

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    $user = getUserById($_SESSION['user_id']);
    
    // Check if session matches database
    if ($user['session'] !== session_id()) {
        // Session doesn't match - user logged in elsewhere
        session_destroy();
        header("Location: ../../index.php?action=login&error=session_expired");
        exit;
    }
    $loggedIn = true;
}


$pages = ceil(count(getAllfragrances($pdo)) / 3);
$current_page = isset($_GET['page-number']) ? $_GET['page-number'] : 1;
$current_page = max(1, $current_page);

if (isset($_GET['rows-per-page'])) {
    setcookie('rows-per-page', $_GET['rows-per-page'], time() + (86400 * 30), "/");
    $rows_per_page = $_GET['rows-per-page'];
} elseif (isset($_COOKIE['rows-per-page'])) {
    $rows_per_page = $_COOKIE['rows-per-page'];
} else {
    $rows_per_page = 8;
}


$total_fragrances = count(getAllfragrances($pdo));
$pages = ceil($total_fragrances / $rows_per_page);

$current_page = min($current_page, $pages);

$start = ($current_page - 1) * $rows_per_page;
$fragrances = getFragranceInRange($pdo, $start, $rows_per_page);

require_once __DIR__ . '/../views/charts.view.php';

?>
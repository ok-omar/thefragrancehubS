<?php
require_once __DIR__ . '/../models/connection.php';
require_once __DIR__ . '/../models/DAO/user/read.php';
require_once __DIR__ . '/../models/DAO/fragrance/read.php';
require_once __DIR__ . '/common.php';

// Send to session expired if the user is no longer logged in
if (!isLoggedIn() && isset($_COOKIE['NON_FRESH_SESS'])) {
    session_destroy();
    header("Location: ../../index.php?action=session_expired");
    exit;
}

// Get the fragrances per page from the get request if the user changed it, else from the cookie
if (isset($_GET['rows-per-page'])) {
    setcookie('rows-per-page', $_GET['rows-per-page'], time() + (86400 * 30), "/");
    $rows_per_page = $_GET['rows-per-page'];
} elseif (isset($_COOKIE['rows-per-page'])) {
    $rows_per_page = $_COOKIE['rows-per-page'];
} else {
    $rows_per_page = 8;
}

// Get current page from URL parameter if set
$current_page = isset($_GET['page-number']) ? $_GET['page-number'] : 1;

// Ensure minimum page is the first page
$current_page = max(1, $current_page);

// Calculate total pages
$total_fragrances = count(getAllfragrances($pdo));
$pages = ceil($total_fragrances / $rows_per_page);

// Ensure maximum page is the last page 
$current_page = min($current_page, $pages);

// Calculate the fragrance range to get from the database
$start = ($current_page - 1) * $rows_per_page;
$fragrances = getFragranceInRange($pdo, $start, $rows_per_page);

require __DIR__ . '/../views/charts.view.php';

?>
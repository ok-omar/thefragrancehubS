<?php
require_once __DIR__ . '/../models/connection.php';
require_once __DIR__ . '/../models/DAO/read.php';


$pages = ceil(count(getAllfragrances($pdo)) / 3);
$current_page = isset($_GET['page-number']) ? $_GET['page-number'] : 1;
$current_page = max(1, $current_page);

if (isset($_GET['rows-per-page'])) {
    setcookie('rows-per-page', $_GET['rows-per-page'], time() + (86400 * 30), "/");
    $rows_per_page = $_GET['rows-per-page'];
} elseif (isset($_COOKIE['rows-per-page'])) {
    $rows_per_page = $_COOKIE['rows-per-page'];
} else {
    $rows_per_page = 3;
}


$total_fragrances = count(getAllfragrances($pdo));
$pages = ceil($total_fragrances / $rows_per_page);

$current_page = min($current_page, $pages);

$start = ($current_page - 1) * $rows_per_page;
$fragrances = getFragranceInRange($pdo, $start, $rows_per_page);

require_once __DIR__ . '/../views/charts.view.php';

?>
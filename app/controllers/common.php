<?php
require_once __DIR__ ."/../models/DAO/user/read.php";

// Set session time to 40 minutes
ini_set('session.gc_maxlifetime', 2400);
session_set_cookie_params(2400);

// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Manual last activity check, if last request is more than 40min, kill the session
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 2400)) {
    session_unset();
    session_destroy();
    header("Location: ../../index.php?action=login");
    exit;
}
$_SESSION['LAST_ACTIVITY'] = time();

// Function to check if user is logged in
function isLoggedIn() {
    if (isset($_SESSION['user_id'])) {
        $user = getUserById($_SESSION['user_id']);
        // Check if session matches database
        if (!$user || $user['session'] !== session_id()) {
            return false;
        }        
        return true;
    }
    return false;
}

// Function to send the user to the login page if not logged in
function requireLogin() {
    if (!isLoggedIn()) {
        header("Location: ../../index.php?action=login");
        exit;
    }
}
?>
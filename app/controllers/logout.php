<?php
require_once __DIR__ . '/../models/connection.php';
require_once __DIR__ . '/../models/DAO/user/update.php';

session_start();

// Update the session ID from the database if user is logged in
if (isset($_SESSION['user_id'])) {
    setNewUserSessionId($_SESSION['user_id'], null);
}

// Unset all session variables
$_SESSION = array();

// Delete the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect to home page
header("Location: ../../index.php");
exit;
?>
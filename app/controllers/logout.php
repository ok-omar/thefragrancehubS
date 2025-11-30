<?php
require_once __DIR__ . '/common.php';
require_once __DIR__ . '/../models/connection.php';
require_once __DIR__ . '/../models/DAO/user/update.php';

// Set session to null in the db for the current user
if (isset($_SESSION['user_id'])) {
    setNewUserSessionId($_SESSION['user_id'], null);
}

// Unset all session variables
$_SESSION = array();

// Delete the session cookie
setcookie('IS_LOGGED', '', time() - 999, '/');
setcookie('SESSION_ID', '', time() - 999, '/');

// Destroy the session
session_destroy();

// Redirect to home page
header("Location: ../views/logout.view.php");
exit;
?>
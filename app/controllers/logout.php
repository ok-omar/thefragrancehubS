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

// Expire the session cookie
setcookie('NON_FRESH_SESS', '', time() - 999, '/');

// Destroy the session
session_destroy();

// Redirect to logout page
header("Location: ../views/logout.view.php");
exit;
?>
<?php
require_once __DIR__ . '/../models/connection.php';
require_once __DIR__ . '/../models/DAO/user/create.php';
require_once __DIR__ . '/../models/DAO/user/read.php';
require_once __DIR__ . '/../models/DAO/user/update.php';
require_once __DIR__ . '/../models/DAO/user/delete.php';
require_once __DIR__ . '/common.php';


$error = '';
$success = '';
$form_data = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'login') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        
        // Save form data to repopulate
        $form_data['username'] = $username;
        
        if (empty($username) || empty($password)) {
            $error = 'Please fill in all fields';
        } else {
            // Get user from database
            $user = getUserByUsername($username);
            
            if ($user && password_verify($password, $user['password_hash'])) {
                // Regenerate session ID for security
                session_regenerate_id(true);
                $new_session_id = session_id();
                
                // Update session in database
                setNewUserSessionId($user['id'], $new_session_id);
                
                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $username;

                // set the cookie to help handle the sesison expiration
                setcookie('NON_FRESH_SESS', '1', 2147483647, "/");
                
                // Redirect to charts page
                header("Location: index.php?action=charts");
                exit;
            } else {
                $error = "Invalid username or password";
            }
        }
        
    } elseif ($action === 'register') {
        $username = trim($_POST['username'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $repeat_password = $_POST['repeat_password'] ?? '';
        $accept_tos = isset($_POST['accept_tos']);
        
        // Save form data to repopulate (don't save passwords)
        $form_data['username'] = $username;
        $form_data['email'] = $email;
        $form_data['accept_tos'] = $accept_tos;
        
        // Validation
        if (empty($username) || empty($email) || empty($password) || empty($repeat_password)) {
            $error = 'Please fill in all fields';
        } elseif ($password !== $repeat_password) {
            $error = 'Passwords do not match';
        } elseif (!$accept_tos) {
            $error = 'You must accept the Terms of Service';
        } elseif (strlen($password) < 6) {
            $error = 'Password must be at least 6 characters';
        } elseif (emailAlreadyExists($email)) {
            $error = 'Email already exists. Please login instead.';
        } elseif (usernameAlreadyExists($username)) {
            $error = 'Username already taken. Please choose a different one.';
        } else {
            $passwordErrors = validateStrongPassword($password);
            if (!empty($passwordErrors)) {
                $error = 'Password must contain ' . implode(', ', $passwordErrors);
            } elseif (emailAlreadyExists($email)) {
                $error = 'Email already exists. Please login instead.';
            } elseif (usernameAlreadyExists($username)) {
                $error = 'Username already taken. Please choose a different one.';
            } else {
                // Hash password ONCE
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                
                // Regenerate session ID for security
                session_regenerate_id(true);
                $new_session_id = session_id();
                
                // Create user
                $user_id = createUser($username, $email, $hashed_password, $new_session_id);
                
                if ($user_id) {
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['username'] = $username;

                    // set the cookie to help handle the sesison expiration
                    setcookie('NON_FRESH_SESS', '1', 2147483647, "/");

                    // Redirect to the charts page
                    header("Location: ../../index.php?action=charts");
                    exit;
                } else {
                    $error = 'Registration failed. Please try again.';
                }
            }
        }

    }
}

// Function to validate strong password
function validateStrongPassword($password) {
    $errors = [];
    
    if (strlen($password) < 8) {
        $errors[] = 'at least 8 characters';
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = 'one uppercase letter';
    }
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = 'one lowercase letter';
    }
    if (!preg_match('/[0-9]/', $password)) {
        $errors[] = 'one number';
    }
    if (!preg_match('/[^A-Za-z0-9]/', $password)) {
        $errors[] = 'one special character';
    }
    
    return $errors;
}

require __DIR__ . '/../views/auth.view.php';
?>
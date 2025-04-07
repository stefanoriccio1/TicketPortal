<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$userName = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : '';

// Optional: Session timeout after 30 minutes of inactivity
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session
    $error = base64_encode('Sei rimasto inattivo per troppo tempo! Eseguire nuovamente Login');
    header("Location: ../login.php?error=1&message=" .$error);

}
$_SESSION['LAST_ACTIVITY'] = time(); // Update last activity time
?>
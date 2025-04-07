<?php
// Start the session only if is not started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Cheking if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // End the session
    session_destroy();
    // Homepage redirect
    header("Location: ../login.php");
    exit();
} else {
    header("Location: ../login.php");
    exit();
}
?>
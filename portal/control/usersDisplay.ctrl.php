<?php
try {
    // DB connection
    require_once "db.ctrl.php";

    // Fetching products from the database
    $query = "SELECT id, name, last_name, email, u_status FROM p_users WHERE is_active = 1";
    // Preparing and executing the query via pod
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    // Fetching results
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Closing PDO connection
    $pdo = null;
    $stmt = null;
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>
<?php
try {
    // DB connection
    require_once "db.ctrl.php";

    // Fetching products from the database
    $query = "SELECT id, name, date_start, p_status, date_end FROM p_projects WHERE is_active = 1";
    // Preparing and executing the query via pod
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    // Fetching results
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Closing PDO connection
    $pdo = null;
    $stmt = null;
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>
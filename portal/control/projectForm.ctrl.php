<?php
session_start();
if (isset($_SESSION['userId'])) {
    if (isset($_POST)) {

        $project_name = isset($_POST["project_name"]) ? $_POST["project_name"] : NULL;
        $project_description = isset($_POST["project_description"]) ? $_POST["project_description"] : NULL;
        $project_type = isset($_POST["project_type"]) ? $_POST["project_type"] : NULL;
        $owner = isset($_POST["project_owner"]) ? $_POST["project_owner"] : NULL;
        $date_start = isset($_POST["date_start"]) ? $_POST["date_start"] : NULL;
        $date_end = isset($_POST["date_end"]) ? $_POST["date_end"] : NULL;
    
    
        try {
            require_once 'db.ctrl.php';
            $query = "INSERT INTO p_projects(owner, project_type, name, description, date_start, date_end) values(:owner, :project_type, :name, :description, :date_start, :date_end)";
            $stmt = $pdo->prepare($query);
    
            $stmt->bindParam(':owner', $owner);
            $stmt->bindParam(':project_type', $project_type);
            $stmt->bindParam(':name', $project_name);
            $stmt->bindParam(':description', $project_description);
            $stmt->bindParam(':date_start', $date_start);
            $stmt->bindParam(':date_end', $date_end);
    
    
    
            $stmt->execute();
            $stmt = null;
            $pdo = null;
            // user not logged
            $inserted = base64_encode('Nuovo progetto creato con successo!');
            header("Location: ../projects.php?inserted=ok&message=" . $inserted);
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }    
} else {
    $_SESSION['messaggio'] = 'Accesso non autorizzato!';
    // user not logged
    $error = base64_encode('Accesso non autorizzato! Esegui il Login');
    header("Location: ../login.php?error=1&message=" . $error);
}

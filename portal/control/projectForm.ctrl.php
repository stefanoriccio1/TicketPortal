<?php
session_start();
if (isset($_SESSION['userId'])) {
    if (isset($_POST)&& !isset($_POST['remove_project_id']) &&  !isset($_POST['reopen_project_id'])){

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
            $created = base64_encode('Nuovo progetto creato con successo!');
            header("Location: ../projects.php?created=ok&message=" . $created);
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }    

    // removing a project from db
    if(isset($_POST) && isset($_POST['remove_project_id'])){
        $project_id = $_POST['remove_project_id'];

        try {
            require_once 'db.ctrl.php';
            $query = "UPDATE p_projects SET is_active = 0 WHERE id = :project_id";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':project_id', $project_id);
    
            $stmt->execute();
            $stmt = null;
            $pdo = null;
            // user not logged
            $removed = base64_encode('Progetto Rimosso!');
            header("Location: ../projects.php?removed=ok&message=" . $removed);
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

    // reopen a project

    if(isset($_POST) && isset($_POST['reopen_project_id'])){
        print_r($_POST['reopen_project_id']);
        $project_id = $_POST['reopen_project_id'];

        try {
            require_once 'db.ctrl.php';
            $query = "UPDATE p_projects SET p_status = 1 WHERE id = :project_id";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':project_id', $project_id);
    
            $stmt->execute();
            $stmt = null;
            $pdo = null;

            header("Location: ../projects.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }
} else {
    // user not logged
    $error = base64_encode('Accesso non autorizzato! Esegui il Login');
    header("Location: ../login.php?error=1&message=" . $error);
}

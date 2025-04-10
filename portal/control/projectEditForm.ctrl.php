<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['userId'])) {
    if (isset($_POST) && isset($_POST['display_edit_project_id'])){

        $project_id = isset($_POST['display_edit_project_id']) ? $_POST['display_edit_project_id'] : NULL;
    

        header("Location: ../projectEdit.php?project=" . $project_id);

    }; 
    
    if (isset($_POST) && isset($_POST['edit_project_id'])) {
        
        $project_id = $_POST['edit_project_id'];
        $project_name = isset($_POST["project_name"]) ? $_POST["project_name"] : NULL;
        $project_description = isset($_POST["project_description"]) ? $_POST["project_description"] : NULL;
        $project_type = isset($_POST["project_type"]) ? $_POST["project_type"] : NULL;
        $project_status = isset($_POST["project_status"]) ? $_POST["project_status"] : NULL;
        $project_owner= isset($_POST["project_owner"]) ? $_POST["project_owner"] : NULL;
        $date_start = isset($_POST["date_start"]) ? $_POST["date_start"] : NULL;
        $date_end = isset($_POST["date_end"]) ? $_POST["date_end"] : NULL;

        try {
            require_once 'db.ctrl.php';
            $query = "UPDATE p_projects SET owner = :owner, project_type = :project_type, name = :name, description = :description, date_start = :date_start, date_end = :date_end, p_status = :p_status WHERE id = :id";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':id', $project_id);
            $stmt->bindParam(':owner', $owner);
            $stmt->bindParam(':project_type', $project_type);
            $stmt->bindParam(':name', $project_name);
            $stmt->bindParam(':description', $project_description);
            $stmt->bindParam(':date_start', $date_start);
            $stmt->bindParam(':date_end', $date_end);
            $stmt->bindParam(':p_status', $project_status);
    
            $stmt->execute();
            $stmt = null;
            $pdo = null;

            $updated = base64_encode('Progetto modificato con successo!');
            header("Location: ../projects.php?updated=ok&message=" . $updated);
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }    

} else {
    // user not logged
    $error = base64_encode('Accesso non autorizzato! Esegui il Login');
    header("Location: ../login.php?error=1&message=" . $error);
};

function getProject($project_id){
    try {
        require_once 'db.ctrl.php';
        $query = "SELECT * from p_projects WHERE id = :id";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':id', $project_id);

        $stmt->execute();
        $project = $stmt->fetch();
        $stmt = null;
        $pdo = null;

        return($project);
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
};

?>
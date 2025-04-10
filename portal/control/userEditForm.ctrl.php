<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['userId'])) {
    if (isset($_POST) && isset($_POST['display_edit_user_id'])){

        $user_id = isset($_POST['display_edit_user_id']) ? $_POST['display_edit_user_id'] : NULL;
    

        header("Location: ../userEdit.php?user=" . $user_id);

    }; 
    
    if (isset($_POST) && isset($_POST['edit_user_id'])) {
        
        $user_id = $_POST['edit_user_id'];
        $user_name = isset($_POST["name"]) ? $_POST["name"] : NULL;
        $user_last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : NULL;
        $user_email = isset($_POST["email"]) ? $_POST["email"] : NULL;
        $user_status = isset($_POST["user_status"]) ? $_POST["user_status"] : NULL;
        $user_password = !empty($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : null;

        try {
            require_once 'db.ctrl.php';
            // $query = "UPDATE p_users SET name = :name, last_name = :last_name, email = :email, u_status = :u_status WHERE id = :id";
            
            $query = "UPDATE p_users SET name = :name, last_name = :last_name, email = :email, u_status = :u_status";
            if ($user_password !== null) {
            $query .= ", password = :password";
            }
            $query .= " WHERE id = :id";


            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':id', $user_id);
            $stmt->bindParam(':name', $user_name);
            $stmt->bindParam(':last_name', $user_last_name);
            $stmt->bindParam(':email', $user_email);
            $stmt->bindParam(':u_status', $user_status); 
            if ($user_password !== null) {
            $stmt->bindParam(':password', $user_password);
            }
    
    
            $stmt->execute();
            $stmt = null;
            $pdo = null;

            $updated = base64_encode('Utente modificato con successo!');
            header("Location: ../users.php?updated=ok&message=" . $updated);
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

function getUser($user_id){
    try {
        require_once 'db.ctrl.php';
        $query = "SELECT * from p_users WHERE id = :id";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':id', $user_id);

        $stmt->execute();
        $user = $stmt->fetch();
        $stmt = null;
        $pdo = null;

        return($user);
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
};

?>
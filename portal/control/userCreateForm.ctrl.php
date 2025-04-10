<?php
session_start();
if (isset($_SESSION['userId'])) {
    if (isset($_POST)&& !isset($_POST['remove_user_id']) &&  !isset($_POST['reactivate_user_id'])){

        $name = isset($_POST["name"]) ? $_POST["name"] : NULL;
        $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : NULL;
        $email = isset($_POST["email"]) ? $_POST["email"] : NULL;
        $password = isset($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : NULL;

        try {
            // Connecting to db
            require_once 'db.ctrl.php';

            // Check if email already exists
            $query_check_email = "SELECT COUNT(*) FROM p_users WHERE email = :email";
            $stmt_check_email = $pdo->prepare($query_check_email);
            $stmt_check_email->bindParam(':email', $email);
            $stmt_check_email->execute();
            
            if ($stmt_check_email->fetchColumn() > 0) {
                $error = base64_encode("Email already exists.");
                header("Location: ../signin.php?error=1&message=" .$error);
                die();
            }

            // Declaring the query with placeholders
            $query = "INSERT INTO p_users (name, last_name, email, password) VALUES (:name, :last_name, :email, :password)";

            // Preparing query
            $stmt = $pdo->prepare($query);

            // Binding parameters to the query
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            // Executing query
            $stmt->execute();

            // Closing PDO connection
            $pdo = null;
            $stmt = null;

            // Redirecting to the signin page
            $created = base64_encode("Utente creato con successo!");
            header("Location: ../users.php?created=1&message=" .$created);
            
            // Terminating the script
            die();
        } catch (PDOException $e) {
            $error = base64_encode($e->getMessage());
            header("Location: ../users.php?error=1&message=" .$error);
        }
    }    

    // removing a User from db
    if(isset($_POST) && isset($_POST['remove_user_id'])){
        $user_id = $_POST['remove_user_id'];

        try {
            require_once 'db.ctrl.php';
            $query = "UPDATE p_users SET is_active = 0 WHERE id = :user_id";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':user_id', $user_id);
    
            $stmt->execute();
            $stmt = null;
            $pdo = null;
            // user not logged
            $removed = base64_encode('Utente Rimosso!');
            header("Location: ../users.php?removed=ok&message=" . $removed);
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

    // User's reactivation

    if(isset($_POST) && isset($_POST['reactivate_user_id'])){
        print_r($_POST['reactivate_user_id']);
        $user_id = $_POST['reactivate_user_id'];

        try {
            require_once 'db.ctrl.php';
            $query = "UPDATE p_users SET u_status = 1 WHERE id = :user_id";
            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':user_id', $user_id);
    
            $stmt->execute();
            $stmt = null;
            $pdo = null;

            header("Location: ../users.php");
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

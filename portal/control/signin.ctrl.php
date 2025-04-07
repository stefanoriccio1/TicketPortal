<?php
session_start();
// if(isset($_SESSION['userID'])){

// } else {
//     $_SESSION['messaggio'] = 'Accesso non autorizzato!';
//     header("Location: ../signin.php");
// }
if (isset($_POST)) {
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

            $_SESSION['signin_success'] = true;

            // Redirecting to the signin page
            header("Location: ../signin.php");
            
            // Terminating the script
            die();
        } catch (PDOException $e) {
            $error = base64_encode($e->getMessage());
            header("Location: ../signin.php?error=1&message=" .$error);
        }
}

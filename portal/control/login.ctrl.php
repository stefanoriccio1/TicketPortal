<?php
// Session starting in order to collect data and store them in the current session
session_start();

// Checking if the request method is POST
if (isset($_POST)) {
    // collecting data from the form
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        try {
            // DB connection
            require_once 'db.ctrl.php';
            // Preparing and executing the query via pod
            $stmt = $pdo->prepare("SELECT * FROM p_users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // Fetching the user from the database
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                // Checking if the password is correct
                if (password_verify($password, $user['password'])) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $user['email'];
                    $_SESSION ['user_name'] = $user['name'] . ' ' . $user['last_name'];
                    $_SESSION['userId'] = $user['id'];
                    $username = $user['email'];
                    header("Location: ../dashboard.php");
                    exit();
                } else {
                    // wrong password
                    $error = base64_encode('Password errata!');
                    header("Location: ../login.php?error=1&message=" .$error);
                }
            } else {
                // user not found
                $error = base64_encode('Utente non trovato!');
                header("Location: ../login.php?error=1&message=" .$error);
            }
        } catch (PDOException $e) {
            $error = base64_encode($e->getMessage());
            header("Location: ../login.php?error=1&message=" .$error);
        }
    } else {
        // missed field
        $error = base64_encode('Devi compilare tutti i campi per proseguire');
        header("Location: ../login.php?error=1&message=" .$error);
    }
}
?>
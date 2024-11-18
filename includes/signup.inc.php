<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_view.inc.php';
        require_once 'signup_contr.inc.php';

        // error handlers

$errors= [];

        if (is_input_empty($_username, $pwd, $email )) {
            $errors["empty_imput"] = "Fill in all fields";
        }
        if (is_email_invalid($email)) {
            $errors["empty_imput"] = "Fill in all fields";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["empty_imput"] = "Fill in all fields";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["empty_imput"] = "Fill in all fields";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
                $_SESSION["errors_singup"] = $errors;
                header("Location: ../index.php");
        }

        
    } catch (PDOException $e) {
        echo "Query Connection failed: " . $e->getMessage();
    }

} else {
    header("Location: ../index.php");
    die();
}
<?php

declare(strict_types=1);

funtion is_input_empty(string $username, string $pwd, string $email){

    function is_input_empty($username, $pwd, $email){

        if (empty($username) || empty($pwd) || empty($email)){
            return true;
        } else{
            return false;
        }
    }
}



    function is_email_invalid(string $email){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        } else{
            return false;
        }
    }

    function is_username_taken(object $pdo, object $username){

        if (get_username($pdo,$username)){
            return true;
        } else{
            return false;
        }
    }

    function is_email_registered(object $pdo, object $email){

        if (get_email( $pdo,  $email)){
            return true;
        } else{
            return false;
        }
    }
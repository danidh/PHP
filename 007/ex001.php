<?php

session_start();

if (isset($_SESSION['user'])) {
    header('location: logedin.php');
}

$validLogins = array(
    "admin" => "admin",
    "user" => "user"
);

checkLogin($_POST["inlognaam"], $_POST["wachtwoord"], $validLogins);

function checkLogin($email, $password, $validLogins) {
    foreach ($_POST as $key => $value) {
        if ($value == "") {
            echo "Error " .  $key . " has no value";
            return;
        }
    }
    
    if (array_key_exists($email ,$validLogins)) {
        if ($validLogins[$email] == $password) {
            $_COOKIE['user'] = $_POST['inlognaam'];
            $_SESSION['user'] = $_POST['inlognaam'];
            echo "Welkom " . $_COOKIE['user'];
            header('location: logedin.php');
        }
        
        else {
            echo "Sorry, geen toegang";
        }
    }
    
    else {
        echo "Sorry, geen toegang";
    }
}
<?php

checkLogin($_POST["email"], $_POST["password"]);

function checkLogin($email, $password) {
    $validlogin = array(
        "piet@worldonline.nl" => "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201"
    );
    
    if (array_key_exists($email ,$validlogin)) {
        if ($validlogin[$email] == $password) {
            echo "Welkom";
            return true;
        }
        
        else {
            echo "Sorry, geen toegang";
            return false;
        }
    }
    
    else {
        echo "Sorry, geen toegang";
        return false;
    }
}




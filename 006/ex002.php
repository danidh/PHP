<?php

$validLogins = connectToDB();
checkLogin($_POST["inlognaam"], $_POST["wachtwoord"], $validLogins);


function connectToDB() {

    $user = 'loginuser';
    $pass = 'password';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=login;port=3308', $user, $pass);
        foreach($dbh->query('SELECT * from login') as $row) {
            foreach($row as $key => $value) {
                if (!is_numeric($key)) {
                    $validLogins[$row["username"]] = $row["password"];
                }
            }
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return $validLogins;
}





function checkLogin($email, $password, $validLogins) {
    foreach ($_POST as $key => $value) {
        if ($value == "") {
            echo "Error " .  $key . " has no value";
            return;
        }
    }
    
    if (array_key_exists($email ,$validLogins)) {
        if ($validLogins[$email] == $password) {
            echo "Welkom";
        }
        
        else {
            echo "Sorry, geen toegang";
        }
    }
    
    else {
        echo "Sorry, geen toegang";
    }
}

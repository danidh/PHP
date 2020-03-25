<?php

session_start();

    if (isset($_SESSION['user'])) {
        echo "Je bent ingelogd als " . $_SESSION['user']; 
    } else {
        header('location: ex001.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingelogd</title>
</head>
<body>
<br>
<a href="adminpage.php">Ga naar de beveiligde pagina</a>
<br>
<a href="logout.php">uitloggen</a>
    
</body>
</html>

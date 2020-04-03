<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monkey Business</title>
    <link rel="stylesheet" href="008-2.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>

    <img src="img/monkey-business.jpg" alt="" class="header">
    <h1>Select your monkey!</h1>
    <img src="img/monkey_swings.png" alt="" class="divider">
    

    <?php

include "Aap.php";

$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";

foreach($apen as $a) 
{
    $aap = new Aap();
    $aap->setSoort($a);
    echo $aap->makeButton();
}

?>
</body>
</html>

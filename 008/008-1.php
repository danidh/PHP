<?php

include("Radioprogramma.php");

$programma = new Radioprogramma();


$programma->setName("Mijn Programma");
$programma->setDescription("Mijn Programma omschrijving");
print_r($programma->getLiedjes());
echo "<br>";
echo $programma->getProgramma();
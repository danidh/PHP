<?php

include("Radioprogramma.php");
include("Liedje.php");

$programma = new Radioprogramma();
$programma->setName("Mijn Programma");
$programma->setDescription("Mijn Programma omschrijving");

foreach($programma->getProgramma() as $p) 
{
    echo $p."<br>";
}

$liedje = new Liedje("Liedje Titel", "Liedje Artiest");

$programma->addLiedje($liedje);

foreach ($programma->getLiedjes() as $l) 
{
    echo $l->getTitel()." - " . $l->getArtiest();
}
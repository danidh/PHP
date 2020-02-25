<?php 

function checkIfChecked($animalValue, $animal) {
    if ($animalValue == "on") {
        echo "<img src=\"img/" . $animal . ".jpg\" >";
    }
}

foreach($_GET as $animal => $animalValue) {
    checkIfChecked($animalValue, $animal);
}
<?php

session_start();

if ($_SESSION['user'] == 'admin') {
    echo "Je bent er, niet veel te doen hier helaas";
} else {
    echo "Jij mag hier helemaal niet komen";
}

?>
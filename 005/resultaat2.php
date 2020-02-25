<?php 

foreach ($_POST as $key => $value) {
    if ($value == "") {
        echo "Error " .  $key . " has no value";
        return;
    }
}

print_r($_POST);
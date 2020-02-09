<?php

for($i = 1; $i <= 10; $i++) {

    if ($i % 2 == 0 ) {
        echo "<img style=\"border: 5px solid red;\" src='img/haircut".$i.".jpg'>";
    }

    else {
        echo "<img style=\"border: 5px solid green;\" src='img/haircut".$i.".jpg'>";
    }
}
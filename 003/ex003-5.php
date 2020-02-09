<?php

$age = 66;
$price = 10;


if ($age > 65 || $age <= 12 && $age > 3) {
    $price /= 2;
}

elseif ($age < 3) {
    $price = 0;
}

echo $price;

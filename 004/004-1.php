<?php 

function celsiusToFahrenheit($degCelsius) {
    $degFahrenheit = $degCelsius * 1.8 + 32;
    return $degFahrenheit;
}

function isDivisibleByThree($num) {
    if ($num % 3 == 0) {
        echo "true";
        return true;
    }
    else {
        echo "true";
        return false;
    }
}

function reverseString($string) { 
    $length = strlen($string);  
    for ($i=($length-1) ; $i >= 0 ; $i--)   
    {  
        echo $string[$i];
    }  
}

echo celsiusToFahrenheit(32);
echo "<br>";
echo isDivisibleByThree(4);
echo "<br>";
reverseString("This String is reversed");
<?php

include "Auto.php";

$autos = array(new Auto("Audi", 56000, "img/audi1.jpg"),
               new Auto("Audi", 134000, "img/audi2.jpg"),
               new Auto("BMW", 63000, "img/bmw1.jpg"),
               new Auto("BMW", 94000, "img/bmw2.jpg"),
               new Auto("BMW", 170000, "img/bmw3.jpg"),
               new Auto("Bugatti", 1500000, "img/bugatti1.jpg"),
               new Auto("Bugatti", 2500000, "img/bugatti2.jpg"),
               new Auto("Ferrari", 256000, "img/ferrari1.jpg"),
               new Auto("Ferrari", 467000, "img/ferrari2.jpg"),
               new Auto("Koenigsegg", 3000000, "img/koenigsegg1.jpg"),
               new Auto("Koenigsegg", 1900000, "img/koenigsegg2.jpg"),
               new Auto("Lamborghini", 250000, "img/lamborghini1.jpg"),
               new Auto("Lamborghini", 680000, "img/lamborghini2.jpg"),
               new Auto("Lamborghini", 1200000, "img/lamborghini3.jpg"),
               new Auto("Mercedes", 45000, "img/mercedes1.jpg"),
               new Auto("Mercedes", 200000, "img/mercedes2.jpg"),
               new Auto("Mercedes", 350000, "img/mercedes3.jpg")
              );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr. Wheely</title>
    <link rel="stylesheet" href="wheely.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="formcontainer">
            <form action="Autooverzicht.php" method="POST">

                <label for="merk">Merk</label>
                <br>
                <select name="merk" id="merk">
                    <option value="all">Alle merken</option>
                    <option value="audi">Audi</option>
                    <option value="bmw">BMW</option>
                    <option value="bugatti">Bugatti</option>
                    <option value="ferrari">Ferrari</option>
                    <option value="koenigsegg">Koenigsegg</option>
                    <option value="lamborghini">Lamborghini</option>
                    <option value="mercedes">Mercedes Benz</option>
                </select>

                <br>

                <label for="maxprice">Max prijs</label>
                <br>
                <input type="text" name="maxprice" id="maxprice">

                <br>

                <label for="minprice">Min prijs</label>
                <br>
                <input type="text" name="minprice" id="minprice">

                <br>

                <input type="submit" class="submit">
            </form>
        </div>
    </div>
</body>
</html>
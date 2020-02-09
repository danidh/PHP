<?php 

$imgArray = array("img/haircut1.jpg","img/haircut2.jpg","img/haircut3.jpg","img/haircut4.jpg","img/haircut5.jpg","img/haircut6.jpg","img/haircut7.jpg","img/haircut8.jpg","img/haircut9.jpg","img/haircut10.jpg");

foreach($imgArray as $img) {
    echo "<img src=" . $img . ">";
}
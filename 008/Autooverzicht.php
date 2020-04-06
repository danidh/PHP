<?php  

class Autooverzicht {


    private $autoos;
    private $gefilterdeAutoos = array();

    function __construct()
    {
        $this->autoos = array(new Auto("Audi", 56000, "img/audi1.jpg"),
        new Auto("Audi", 134000, "img/audi2.jpg"),
        new Auto("Bmw", 63000, "img/bmw1.jpg"),
        new Auto("Bmw", 94000, "img/bmw2.jpg"),
        new Auto("Bmw", 170000, "img/bmw3.jpg"),
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
    }

    function getGefilterdeLijst($minprijs, $maxprijs, $merk) 
    {
        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs ) {
                if ($auto->getMerk() == $merk || $merk == "all") {
                    $this->gefilterdeAutoos[] = $auto;
                }
                
            }
        }
        return $this->gefilterdeAutoos;
    }

    function getAutoLijst() 
    {
        return $this->autoos;
    }
}
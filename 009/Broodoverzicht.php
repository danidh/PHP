<?php

session_start();

class Broodoverzicht {


    private $broodjes;

    function __construct()
    {

        if(isset($_SESSION['broodjes']) && !empty($_SESSION['broodjes'])) {
            $this->broodjes = $_SESSION['broodjes'];
        } else {
            $this->broodjes = array(
                new Broodje("Pistolet wit", "patentbloem", "cylinder", 100),
                new Broodje("Pistolet bruin", "tarwebloem", "cylinder", 100),
                new Broodje("Stokbrood wit", "patentbloem", "cylinder", 300),
                new Broodje("stokbrood bruin", "tarwebloem", "cylinder", 300),
                new Broodje("Vloerbrood volkoren", "volkorenmeel", "bol", 500),
                new Broodje("Vloerbrood wit", "patentbloem", "bol", 500),
                new Broodje("Casino wit", "patentbloem", "rechthoekig", 350),
                new Broodje("Tijgerbruin", "tarwebloem", "rechthoekig", 400),
                new Broodje("Tijgerwit", "patentbloem", "rechthoekig", 400),
                new Broodje("Volkorenbrood", "volkorenmeel", "rechthoekig", 500 ),
                new Broodje("Speltbrood", "spelt", "vierkant", 250),
                new Broodje("Maisbrood", "mais", "vierkant", 250),
                new Broodje("Meergranenbonkje", "volkorenmeel", "vierkant", 300),
                new Broodje("Ciabatta", "tarwebloem", "cylinder", 150)
            );
        }
    }

    function getBroodjes() 
    {
        return $this->broodjes;
    }

    function addBroodje($soort, $meel, $vorm, $gewicht) {
        $newBroodje = new Broodje($soort, $meel, $vorm, $gewicht);
        $this->broodjes[] = $newBroodje;
        $_SESSION['broodjes'] = $this->broodjes;
    }

    function editBroodje($broodjeselect, $soortedit, $meeledit, $vormedit, $gewichtedit) {
        foreach($this->broodjes as $broodje) {
            if ($broodje->getSoort() == $broodjeselect) {
                $broodje->setSoort($soortedit);
                $broodje->setMeel($meeledit);
                $broodje->setVorm($vormedit);
                $broodje->setGewicht($gewichtedit);
            }
        }
        $_SESSION['broodjes'] = $this->broodjes;
    }
    
}
<?php

class Broodje {
    
    private $soort;
    private $meel;
    private $vorm;
    private $gewicht;

    function __construct($soort, $meel, $vorm, $gewicht)
    {
        $this->soort = $soort;
        $this->meel = $meel;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    function getSoort()
    {
        return $this->soort;
    }

    function setSoort($soort) 
    {
        $this->soort = $soort;
    }

    function getMeel()
    {
        return $this->meel;
    }

    function setMeel($meel)
    {
        $this->meel = $meel;
    }

    function getVorm() 
    {
         return $this->vorm;
    }

    function setVorm($vorm)
    {
        $this->vorm = $vorm;
    }

    function getGewicht()
    {
        return $this->gewicht;
    }

    function setGewicht($gewicht) 
    {
        $this->gewicht = $gewicht;
    }

}
<?php
class Radioprogramma 
{
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function addLiedje($liedje) {
        $this->liedjes[] = $liedje;
    }

    public function setName($name) 
    {
        $this->naam = $name;
    }

    public function setDescription($description) 
    {
        $this->omschrijving = $description;
    }

    public function getLiedjes() 
    {
        return $this->liedjes;
    }

    public function getProgramma() 
    {
        return array("naam" => $this->naam,
                     "omschrijving" => $this->omschrijving);
    }
}




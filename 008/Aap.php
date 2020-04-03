<?php

class Aap 
{
    private $soort;
    private $url;

    public function setSoort($soort) 
    {
        $this->soort = $soort;
    }

    public function makeButton() 
    {
        return "<a href=\"https://www.google.nl/search?q=$this->soort&tbm=isch\">$this->soort</a>";
    }
}
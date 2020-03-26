<?php

class Radioprogramma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = ["liedje 1", "liedje 2", "liedje 3"];

    public function setName($name) {
        $this->naam = $name;
    }

    public function setDescription($description) {
        $this->omschrijving = $description;
    }

    public function getLiedjes() {
        return $this->liedjes;
    }

    public function getProgramma() {
        return $this->naam . "<br>" . $this->omschrijving;
    }
}




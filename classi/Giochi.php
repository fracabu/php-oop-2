<?php
require_once __DIR__ . "/Product.php";

class Giochi extends Product
{
    private $materiale;
    private $colore;

    /**
     * Get the value of materiale
     */ 
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     *
     * @return  self
     */ 
    public function setMateriale($materiale)
    {
        $this->materiale = $materiale;

        return $this;
    }

    /**
     * Get the value of colore
     */ 
    public function getColore()
    {
        return $this->colore;
    }

    /**
     * Set the value of colore
     *
     * @return  self
     */ 
    public function setColore($colore)
    {
        $this->colore = $colore;

        return $this;
    }
}
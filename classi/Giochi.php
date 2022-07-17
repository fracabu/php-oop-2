<?php
require_once __DIR__ . "/Product.php";

class Giochi extends Product
{
    private $materiale;
    private $colore;

    function __construct($_price,$_title,$_materiale,$_colore)
    {
        // invoco il padre
        parent::__construct($_price, $_title);

        $this->setMateriale($_materiale);
        $this->setColore($_colore);

    }

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
<?php
require_once __DIR__ . "/Product.php";

class Alimentari extends Product
{
    private $scadenza;
    private $ingredienti;

    //funzione per sovrascrivere per sovrascrivere il constructor di product così aggiungo le proprietà
    //scadenza e ingredienti a quelle del constructor (price e title)

    function __construct($_price,$_title,$_scadenza,$_ingredienti)
    {
        // invoco il padre
        parent::__construct($_price, $_title);

        $this->setScadenza($_scadenza);
        $this->setIngredienti($_ingredienti);

    }

    /**
     * Get the value of scadenza
     */ 
    public function getScadenza()
    {
        return $this->scadenza;
    }

    /**
     * Set the value of scadenza
     *
     * @return  self
     */ 
    public function setScadenza($scadenza)
    {
        $this->scadenza = $scadenza;

        return $this;
    }

    /**
     * Get the value of ingredienti
     */ 
    public function getIngredienti()
    {
        return $this->ingredienti;
    }

    /**
     * Set the value of ingredienti
     *
     * @return  self
     */ 
    public function setIngredienti($ingredienti)
    {
        $this->ingredienti = $ingredienti;

        return $this;
    }
}
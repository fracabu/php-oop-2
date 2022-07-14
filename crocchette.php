<?php

include_once __DIR__ . '/Prodotti.php';

class Crocchette extends Prodotto
{
    //istanze
    public $gusto;
    public $quantita;
    public $prezzo;
    
    //funzione
    public function __construct($_marca, $_nome, $_tipologia, $_sconto, $_gusto, $_quantita, $_prezzo)
    {
        parent::__construct($_marca, $_nome, $_tipologia, $_sconto);
        $this->cgusto = $_gusto;
        $this->quantita = $_quantita;
        $this->prezzo = $_prezzo;
    }

    public function stampa(){
        return $this->gusto . " " . $this->quantita . " " . $this->prezzo;
    }

    
    
}


?>
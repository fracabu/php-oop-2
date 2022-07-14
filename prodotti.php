<?php

class Prodotto
{
    
    public $marca;
    public $nome;
    public $tipologia;
    public $sconto;


    public function __construct($_marca, $_nome, $_tipologia, $_sconto)
    {
        $this->marca = $_marca;
        $this->nome = $_nome;
        $this->tipologia = $_tipologia;
        $this->sconto = $_sconto;
    }



//  funzione per verificare disponibiltà prodotto
    public function prodottoDisponibile($_quantita)
    {
        if ($this->quantita <= 0) {
            return 'Non Disponibile';
        } else {
            return 'Disponibile';
        }
    }
}

var_dump()
?>
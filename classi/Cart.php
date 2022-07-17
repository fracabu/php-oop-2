<?php

//Creazione del carrello

class Cart
{   
    // array dei prodotti dove verranno pushati i prodotti selezionati
    private $products = [];

    // funzione per aggiungere prodotti al carrello

    public function add($product){
        $this->products[] = $product;

    }
    // funzione per rimuovere prodotti dal carrello
    public function remove($product){

    }
    // funzione per ottenere il totale con eventuale sconto del 20% se l'utente è registrato
    public function getTotal($discount = 0){
        $total = 0;
        foreach ($this->products as $product){
            $total += $product->getPrice();
        }

        return $total;
    }

    // funzione per ottenere l'elenco dei prodotti contenuti nel carrello

    public function getProducts()
    {
        return $this->products;
    }



}
<?php

class Product 
{
    //aggiungo gli attributi comuni a tutti i prodotti (prezzo e titolo)
private float $price;
private string $title;
// prezzo e titolo sono obbligatori
function __construct($_price,$_title)
{
    $this->setPrice($_price);
    $this->setTitle($_title);
}

/**
 * Get the value of price
 */ 
public function getPrice()
{
return $this->price;
}

/**
 * Set the value of price
 *
 * @return  self
 */ 
public function setPrice($price)
{
$this->price = $price;

return $this;
}

/**
 * Get the value of title
 */ 
public function getTitle()
{
return $this->title;
}

/**
 * Set the value of title
 *
 * @return  self
 */ 
public function setTitle($title)
{
$this->title = $title;

return $this;
}
}
<?php

class Product 
{
    //aggiungo gli attributi comuni a tutti i prodotti (prezzo e titolo)
private float $price;
private string $title;
//creo id per poter rimuovere i prodotti dal carrello
private string $id;
// prezzo e titolo sono obbligatori
function __construct($_price,$_title)
{
    $this->setPrice($_price);
    $this->setTitle($_title);
    $this->sid = uniqid();
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

/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}
}
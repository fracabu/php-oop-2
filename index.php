<?php
// collego il file Customer
require_once "classi/Customer.php";
require_once "classi/Alimentari.php";
require_once "classi/Giochi.php";
//creo l'istanza del mio utente che attualmente non è registrato infatti registered restituisce false
$customer = new Customer ();
//utilizzo la funzione creata per la registrazione dell'utente
$customer->register("Mario", "Rossi");

//creo un array di istanze per i prodotti

$products = [
    new Alimentari (2.10, "Anatra e Riso", "2022-12-03", ["anatra", "riso"]),
    new Alimentari (1.10, "Duck & Rice", "2022-12-03", ["anatra", "riso"]),
    new Giochi (12.10, "Kong","gomma","rosso"),
    new Giochi (3.10, "palla","gomma","giallo"),
];
//aggiungo il prodotto al carrello
$customer->cart->add($products[1]);
$customer->cart->add($products[3]);


var_dump($customer);
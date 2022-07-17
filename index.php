<?php
// collego il file Customer
require_once "classi/Customer.php";
//creo l'istanza del mio utente che attualmente non è registrato infatti registered restituisce false
$customer = new Customer ();
//utilizzo la funzione creata per la registrazione dell'utente
$customer->register("Mario", "Rossi");

//invoco il carrello e gli passo l'istanza di un prodotto
$customer->cart->add([]);
var_dump($customer);
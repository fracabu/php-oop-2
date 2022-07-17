<?php

//includo il carrello e i metodi di pagamento nel Customer
require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/PaymentHandler.php";


class Customer
{
    private $registered = false;
    private $firstName;
    private $lastName;
    //creo la variabile Cart nel Customer che poi vado ad inizializzare nel Costruttore
    public Cart $cart;
    //creo la variabile PaymentHandler nel Customer che poi vado ad inizializzare nel Costruttore
    public PaymentHandler $paymentHandler;


    //creo costruttore con valore null perchè se mi passa nome e cognome l'utente
    // è registrato altrimenti no

    function __construct($_firstName = null, $_lastName = null)
    {
        //inizializzo la classe Cart nel costruttore
        $this->cart = new Cart();
        //inizializzo la classe paymentMethods nel costruttore
        $this->paymentHandler = new PaymentHandler();

        //se ho nome e cognome vuol dire che l'utente è registrato

        if (isset($_firstName) && isset($_lastName)) {
            //utilizzo la funzione creata sotto perchè se ricevo i dati di registrazione
            // vuol dire che l'utente è registrato 
        $this->register($_firstName,$_lastName);
        }
    }

    /**
     * Get the value of registered
     */
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     * Lo rendo private perchè non deve essere accessibile dall'esterno ma decido io
     * @return  self
     */
    private function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }
    // Creo funzione per dire che quando ricevo nome e cognome l'utente è registrato anche se si vuole
    // registrare in un secondo momento
    public function register($_firstName, $_lastName)
    {
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
        $this->setRegistered(true);
    }
    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    //funzione per effettuare il pagamento
    public function checkout(){
        //recupera il totale del carrello
        $total = $this->cart->getTotal();

        //controlla se deve applicare uno sconto
        $discount = $this->registered ? 20 : 0;
        $totalWhitDiscount = $total - ($total * $discount / 100);

        //controlla che la carta non sia scaduta

        //conclude il pagamento

    }
}

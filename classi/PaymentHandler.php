<?php
// questa classe andrà istanziata all'interno del Customer
class PaymentHandler{

    //array vuoto dove verranno pushati i metodi di pagamento utilizzati dall'utente
    private $paymentMethods =[];
    //funzione per aggiungere un metodo di pagamento che verrà pushato dentro l'array
    public function add($_paymentMethod){
        $this->paymentMethods[] = $_paymentMethod;

    }

    /**
     * Get the value of paymentsMethods
     */ 
    public function getPaymentsMethods()
    {
        return $this->paymentsMethods;
    }

}
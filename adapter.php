<?php

interface PaymentInterface{
    public function AddPrice();
}

class Paypal implements PaymentInterface{
    public function AddPrice(){
        echo "Add Price of Paypal";
    }
}

class Stripe{
    public function AddtoPrice(){
        echo "Add to Price of Stripe";
    }
}

class Adapter implements PaymentInterface{
    public $payment;
    public function __construct()
    {
        $this->payment = new Stripe();
    }
    public function AddPrice(){
        $this->payment->AddtoPrice();
    }
}

class Client{
    public $obj;
    public function __construct($payment)
    {
        $this->obj = $payment == 'paypal' ? new Paypal() : new Adapter();
    }

    public function AddPrice(){
        $this->obj->AddPrice();
    }
}


$obj = new Client('stipe');
$obj->AddPrice();

?>
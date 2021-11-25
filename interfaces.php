<?php

// INTERFACES
interface PaymentInterface {
    public function payNow();
}
interface LoginInterface {
    public function loginFirst();
}

class Paypal implements PaymentInterface, LoginInterface {
    public function loginFirst() {
        echo "Logged in";
    }
    public function payNow() {
        echo "Payment Paypal";
    }
    public function countAmount() {
        echo "£199";
    }
    //Group methods
    public function paymentProcess() {
        $this->payNow();
        $this->countAmount();
    }
}

class Cash implements PaymentInterface {
    public function payNow() {
        echo "Payment Cash";
    }
    public function paymentProcess() {
        $this->payNow();
    }
}

class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);

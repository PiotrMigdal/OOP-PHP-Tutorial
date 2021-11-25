<?php


//Abstract class is a kind of classes that can only be used by other class as an extension. It can't be used as independent class (cant to new Class)
abstract class Visa {
    public function visaPayment()
    {
        return "Perform Visa payment";
    }

    //The following requires from extending class to include this method / similar to interfaces
    abstract public function getPayment();
}
<?php
include_once "abstract/paymenttype.abstract.php";
include_once "classes/BuyProduct.class.php";

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
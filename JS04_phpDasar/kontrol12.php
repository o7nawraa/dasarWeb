<?php

$normalPrice = 120000;
$discount = 0.2;

$priceDiscount = $normalPrice * $discount;
$paid = $normalPrice - $priceDiscount;

echo "The customer should paid $paid";

?>
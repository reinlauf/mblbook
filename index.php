<?php

include "classes/User.php";
include "classes/Product.php";
include "classes/ProductOrder.php";
$max = User::findByEmail("max@muster.de");
 
$order = new ProductOrder($max);
$order->addProductById(23);
$order->addProductById(42);
 
if($order->buy()) {
   include("view/order-successful.view.php");
} else {
   include("view/order-failed.view.php");
}
?>
<?php
include_once('Product.php');
include_once('OrderItem.php');
include_once('Order.php');

$order = new Order();
$productTypes = array_keys(OrderItem::FEE_BY_PRODUCT_TYPE);

//Auto add random product item into order
for ($i = 0; $i < 3; $i++) { 
    $item = new OrderItem();
    $item->setType($productTypes[array_rand($productTypes)])
        ->setAmazonPrice(random_int(50, 100))
        ->setWeight(random_int(100, 200))
        ->setWidth(random_int(1, 10))
        ->setHeight(random_int(1, 10))
        ->setDepth(random_int(1, 10));
    $order->addItems($item);
}

//Print an order
$order->printOrder();

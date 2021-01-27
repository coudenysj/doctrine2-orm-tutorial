<?php
// identity_map_tracking.php
require_once "bootstrap.php";

$product1 = $entityManager->getRepository('Product')->find(1);
echo 'This is $product1 ' . $product1->getId()
    . ' with spl_object_hash ' . spl_object_hash($product1) . PHP_EOL;

// This will not trigger a query
$product2 = $entityManager->getRepository('Product')->find(1);
echo 'This is $product2 ' . $product2->getId()
    . ' with spl_object_hash ' . spl_object_hash($product2) . PHP_EOL;

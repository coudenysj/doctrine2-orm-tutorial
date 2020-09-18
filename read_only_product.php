<?php
// read_only_product.php
require_once "bootstrap.php";

echo 'Fetching product 1' . PHP_EOL;
$product = $entityManager->find('Product', 1);

$newProduct = new Product();
$newProduct->setName(uniqid('new'));

echo 'Persisting new product' . PHP_EOL;
$entityManager->persist($newProduct);
echo 'Changing product 1' . PHP_EOL;
$product->setName(uniqid('old-changed'));

echo 'Flushing the entity manager' . PHP_EOL;
$entityManager->flush();

echo 'Changing new product' . PHP_EOL;
$newProduct->setName(uniqid('new-name'));

echo 'Flushing the entity manager' . PHP_EOL;
$entityManager->flush();

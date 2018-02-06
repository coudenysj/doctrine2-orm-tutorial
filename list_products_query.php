<?php
// list_products_query.php
require_once "bootstrap.php";

$products = $entityManager->getRepository('Product')
    ->createQueryBuilder('product')
    ->where('product.name = :name')
    ->setParameter('name', 'DBAL')
    ->getQuery()
    ->setCacheable(true)
    ->getResult();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}

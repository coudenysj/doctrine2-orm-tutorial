<?php
// show_bug_products.php
require_once "bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int)$theBugId);

echo "Bug: ".$bug->getDescription()."\n";
echo "Products: \n";
foreach ($bug->getProducts() as $product) {
    echo " - ".$product->getName()."\n";
}

<?php
// identity_map.php
require_once "bootstrap.php";

$uow = $entityManager->getUnitOfWork();

$entityManager->getRepository('Product')->findAll();
$entityManager->getRepository('User')->findAll();

foreach ($uow->getIdentityMap() as $classname => $entities) {
    echo $classname . PHP_EOL;
    foreach ($entities as $hash => $entity) {
        echo ' - ' . $hash . ':' . json_encode((array) $entity) . PHP_EOL;
    }
}

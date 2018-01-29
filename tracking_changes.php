<?php
// tracking_changes.php
require_once "bootstrap.php";

$uow = $entityManager->getUnitOfWork();

$product = $entityManager->getRepository('Product')->find(1);

$reflectionClass = new ReflectionClass($uow);
$reflectionProperty = $reflectionClass->getProperty('entityChangeSets');
$reflectionProperty->setAccessible(true);

var_dump($reflectionProperty->getValue($uow));

$product->setName(uniqid('Changed'));

var_dump($reflectionProperty->getValue($uow));

$uow->computeChangeSets();

var_dump($reflectionProperty->getValue($uow));

$entityManager->flush();

var_dump($reflectionProperty->getValue($uow));

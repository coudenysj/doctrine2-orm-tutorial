<?php
// identity_identifiers.php
require_once "bootstrap.php";

$uow = $entityManager->getUnitOfWork();

$entityManager->getRepository('Product')->findAll();
$entityManager->getRepository('User')->findAll();

$reflectionClass = new ReflectionClass($uow);
$reflectionProperty = $reflectionClass->getProperty('entityIdentifiers');
$reflectionProperty->setAccessible(true);
var_dump($reflectionProperty->getValue($uow));

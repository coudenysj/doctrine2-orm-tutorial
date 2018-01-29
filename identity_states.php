<?php
// identity_states.php
require_once "bootstrap.php";

$uow = $entityManager->getUnitOfWork();

$entityManager->getRepository('Product')->findAll();
$entityManager->getRepository('User')->findAll();

$reflectionClass = new ReflectionClass($uow);
$reflectionProperty = $reflectionClass->getProperty('entityStates');
$reflectionProperty->setAccessible(true);
var_dump($reflectionProperty->getValue($uow));

<?php
// read_only.php
require_once "bootstrap.php";

echo 'Fetching bug 1' . PHP_EOL;
$bug = $entityManager->find('Bug', 1);

$newBug = new Bug();
$newBug->setDescription(uniqid('new'));
$newBug->setCreated(new DateTime("now"));
$newBug->setStatus("OPEN");

echo 'Persisting new bug' . PHP_EOL;
$entityManager->persist($newBug);
echo 'Changing bug 1' . PHP_EOL;
$bug->setDescription(uniqid('old-changed'));

echo 'Flushing the entity manager' . PHP_EOL;
$entityManager->flush();

echo 'Changing new bug' . PHP_EOL;
$newBug->setDescription(uniqid('new-name'));

echo 'Flushing the entity manager' . PHP_EOL;
$entityManager->flush();

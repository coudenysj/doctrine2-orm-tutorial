<?php
use Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotation Mapping
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);

if (getenv('SQL_LOGGER')) {
    $config->setSQLLogger(new SQLLogger());
}

$factory = new \Doctrine\ORM\Cache\DefaultCacheFactory(
    new \Doctrine\ORM\Cache\RegionsConfiguration(),
    new \Doctrine\Common\Cache\FilesystemCache(
        __DIR__ . '/data'
    )
);

// Enable second-level-cache
$config->setSecondLevelCacheEnabled();

// Cache factory
$config->getSecondLevelCacheConfiguration()
    ->setCacheFactory($factory);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

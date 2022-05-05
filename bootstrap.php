<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create doctrine ORM config
$isDevMode = true;
$proxiDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = ORMSetup::createAnnotationMetadataConfiguration(
    array(__DIR__ . "/src"),
    $isDevMode,
    $proxiDir,
    $cache
);

$connectionParams = array(
    'dbname' => 'PersonalDB_D',
    'user' => 'root',
    'password' => 'password',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// database configuration paramenters - using MySQL
$conn = DriverManager::getConnection($connectionParams);

//obtain the entity manager
$entityManager = EntityManager::create($conn, $config);

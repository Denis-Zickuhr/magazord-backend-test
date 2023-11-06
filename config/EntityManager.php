<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";

$entityPath = ['App\Model'];

$dbParams = [
    'driver'   => 'mysqli',
    'host'     => 'db', # Needs to be changed to localhost|db (running) for migrating outside docker
    'user'     => 'bdc',
    'password' => '123456',
    'dbname'   => 'banco_de_contatos',
    'port'     => 3306,
];

$config = Setup::createAnnotationMetadataConfiguration($entityPath, true, null, null, false);

$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;
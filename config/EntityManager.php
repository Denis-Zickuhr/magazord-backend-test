<?php
require_once 'vendor/autoload.php';

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'bdc');
define('DB_PASS', '123456');
define('DB_NAME', 'banco_de_contatos');
define('DB_PORT', '9906');
define('DB_DRIVER', 'mysqli');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$entityPath = ['App\Model'];

$dbParams = [
    'driver'   => DB_DRIVER,
    'host'     => DB_HOST,
    'user'     => DB_USER,
    'password' => DB_PASS,
    'dbname'   => DB_NAME,
    'port'     => DB_PORT,
];

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration($entityPath, $isDevMode, null, null, false);

$entityManager = EntityManager::create($dbParams, $config);

return $entityManager;

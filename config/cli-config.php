<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'EntityManager.php';

$entityManager = require 'EntityManager.php';

return ConsoleRunner::createHelperSet($entityManager);
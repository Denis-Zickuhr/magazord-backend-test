<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require 'EntityManager.php';;

return ConsoleRunner::createHelperSet($entityManager);
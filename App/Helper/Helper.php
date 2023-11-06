<?php

namespace App\Helper;

use App\Utils\EntityManager;

class Helper
{
    protected $entityManager;

    public function __construct()
    {
        $em = new EntityManager();
        $this->entityManager = $em->getInstance();
    }

}

<?php

namespace App\Utils;


class EntityManager
{
    public function getInstance()
    {
        return require "config/EntityManager.php";
    }
}
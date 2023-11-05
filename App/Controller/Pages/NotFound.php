<?php

namespace App\Controller\Pages;

use App\Utils\View;

class NotFound extends Page
{
    public static function getNotFound()
    {
        $content = View::render('pages/not_found');
        echo self::getPage('Não encontrado', $content);
    }
}

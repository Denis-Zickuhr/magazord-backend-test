<?php

namespace App\Controller;

use App\Utils\View;

class NotFoundController extends PageController
{
    public static function index()
    {
        $content = View::render('pages/not_found');
        echo self::getPage('MContacs - Não encontrado', $content);
    }
}

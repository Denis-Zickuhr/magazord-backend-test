<?php

namespace App\Controller;

use App\Utils\View;

class PageController
{
    public static function getPage($title = '', $content = 'pagina vazia')
    {
        return View::render('pages/page', ['title' => $title, 'content' => $content]);
    }
}

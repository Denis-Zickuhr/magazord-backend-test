<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page
{
    public static function getPage($title = '', $content = 'pagina vazia')
    {
        return View::render('pages/page', ['title' => $title, 'content' => $content]);
    }
}

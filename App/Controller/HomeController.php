<?php

namespace App\Controller;

use App\Utils\View;

class HomeController extends PageController
{

    private static $personHelper;
    public function __construct()
    {
        self::$personHelper = new \App\Helper\PersonHelper();
    }
    public static function index()
    {
        $data = self::$personHelper->getAllPersons();


        $jsonData = json_encode($data);

        $content = View::render('pages/home', ['webApp' => 'Aplicativo em Php', 'users' => $jsonData]);
        echo self::getPage('MContacs - Home', $content);
    }
}

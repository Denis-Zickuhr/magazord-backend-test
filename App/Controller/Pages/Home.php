<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home extends Page
{
    public static function getHome()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Denis Zickuhr',
                'document' => '09514967941',
            ],
            [
                'id' => 2,
                'name' => 'Carlos Gomes',
                'document' => '76817450098',
            ],
            [
                'id' => 3,
                'name' => 'Simária Souza',
                'document' => '12247136052',
            ],
            [
                'id' => 4,
                'name' => 'Jhony Silver Hand',
                'document' => '14874502067',
            ],
        ];

        $jsonData = json_encode($data);

        $content = View::render('pages/home', ['webApp' => 'Aplicativo em Php', 'users' => $jsonData]);
        echo self::getPage('Home', $content);
    }

    public static function show($id)
    {
        echo $id . 'teste';
    }
}

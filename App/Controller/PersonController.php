<?php

namespace App\Controller;

use App\Model\Person;
use App\Utils\View;

class PersonController extends PageController
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

        $content = View::render('pages/users', ['webApp' => 'Aplicativo em Php', 'users' => $jsonData]);
        echo self::getPage('MContacs - Usuários', $content);
    }

    public static function show($id = null)
    {
        $data = null;
        if ($id) {
            $data = self::$personHelper->getPersonById($id);
        }

        $page = $id ? 'pages/edit_user' : 'pages/create_user';
        $title = $id ? 'MContacs - Editar Usuário' : 'MContacs - Criar Usuário';

        $content = View::render($page, $data? ['userId' => $data->getId(), 'userName' => $data->getName(), 'userDoc' => $data->getDocument()] : []);
        echo self::getPage($title, $content);
    }

    public static function edit($id)
    {
        $person = self::$personHelper->getPersonById($id);
        self::$personHelper->updatePerson($person, $_POST['name'], $_POST['document']);

        header('Location: /users');
        exit;
    }

    public static function create()
    {
        self::$personHelper->createPerson($_POST['name'], $_POST['document']);

        header('Location: /users');
        exit;
    }

    public static function delete($id)
    {
        $person = self::$personHelper->getPersonById($id);
        self::$personHelper->deletePerson($person);

        header('Location: /users');
        exit;
    }
}

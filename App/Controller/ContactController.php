<?php

namespace App\Controller;

use App\Model\Contact;
use App\Utils\View;

class ContactController extends PageController
{

    private static $contactHelper;
    private static $personHelper;
    public function __construct()
    {
        self::$contactHelper = new \App\Helper\ContactHelper();
        self::$personHelper = new \App\Helper\PersonHelper();
    }
    public static function index()
    {
        $data = self::$contactHelper->getAllContacts();

        $jsonData = json_encode($data);

        $content = View::render('pages/contacts', ['contacts' => $jsonData]);
        echo self::getPage('MContacs - Contatos', $content);
    }

    public static function show($id = null)
    {
        $data = null;
        if ($id) {
            $data = self::$contactHelper->getContactById($id);
        }
        $persons = self::$personHelper->getAllPersons();
        $personsJson = json_encode($persons);

        $page = $id ? 'pages/edit_contact' : 'pages/create_contact';
        $title = $id ? 'MContacts - Editar Contato' : 'MContacts - Criar Contato';

        $content = View::render($page, $data ? ['users' => $personsJson, 'contactId' => $id, 'contactPersonId' => $data->getPerson()->getId(), 'contactDescription' => $data->getDescricao()] : ['users' => $personsJson]);
        echo self::getPage($title, $content);
    }

    public static function edit($id)
    {
        $contact = self::$contactHelper->getContactById($id);

        try {
            self::$contactHelper->updateContact($contact, $_POST['type'], $_POST['description'], intval($_POST['users']));
            header('Location: /contacts');
            exit;
        } catch (\Exception $e) {
            echo $e;
            header('Location: /contacts-edit-' . $id);
        }
    }

    public static function create()
    {

        self::$contactHelper->createContact($_POST['type'], $_POST['description'],  intval($_POST['users']));

        header('Location: /contacts');
        exit;
    }

    public static function delete($id)
    {
        $contact = self::$contactHelper->getContactById($id);
        self::$contactHelper->deleteContact($contact);

        header('Location: /contacts');
        exit;
    }
}

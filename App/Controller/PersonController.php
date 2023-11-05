<?php

namespace App\Controller;

use App\Model\Person;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;

class PersonController
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function listPersons()
    {
        $personRepository = $this->entityManager->getRepository(Person::class);
        $persons = $personRepository->findAll();

        return new Response(strval($persons));
    }

    // public function createPerson(Request $request)
    // {
    //     if ($request->getMethod() === 'POST') {
    //         $name = $request->get('name');
    //         $document = $request->get('document');

    //         $person = new Person();
    //         $person->setName($name);
    //         $person->setDocument($document);

    //         $this->entityManager->persist($person);
    //         $this->entityManager->flush();

    //         // Redirect to the list of persons or display a success message
    //         return new Response(redirect('/listPersons'));
    //     }

    //     // Render a view for creating a person (e.g., createEditPerson.php)
    //     return new Response(renderView('createEditPerson.php'));
    // }

    // public function editPerson(Request $request, $id)
    // {
    //     $personRepository = $this->entityManager->getRepository(Person::class);
    //     $person = $personRepository->find($id);

    //     if (!$person) {
    //         // Handle the case where the person is not found (e.g., display an error message)
    //     }

    //     if ($request->getMethod() === 'POST') {
    //         $name = $request->get('name');
    //         $document = $request->get('document');

    //         // Validate user input

    //         // Update the person's data
    //         $person->setName($name);
    //         $person->setDocument($document);

    //         // Persist the changes to the database
    //         $this->entityManager->flush();

    //         // Redirect to the list of persons or display a success message
    //         return new Response(redirect('/listPersons'));
    //     }

    //     // Render a view for editing the person (e.g., createEditPerson.php)
    //     return new Response(renderView('createEditPerson.php', ['person' => $person]));
    // }

    // public function deletePerson(Request $request, $id)
    // {
    //     $personRepository = $this->entityManager->getRepository(Person::class);
    //     $person = $personRepository->find($id);

    //     if (!$person) {
    //         // Handle the case where the person is not found (e.g., display an error message)
    //     }

    //     if ($request->getMethod() === 'POST') {
    //         // Delete the person from the database
    //         $this->entityManager->remove($person);
    //         $this->entityManager->flush();

    //         // Redirect to the list of persons or display a success message
    //         return new Response(redirect('/listPersons'));
    //     }

    //     // Render a confirmation view for deleting the person
    //     return new Response(renderView('confirmDeletePerson.php', ['person' => $person]));
    // }
}

<?php

namespace App\Helper;

use App\Model\Person;

class PersonHelper extends Helper
{
    public function createPerson($name, $document)
    {
        $person = new Person();
        $person->setName($name);
        $person->setDocument($document);

        $this->entityManager->persist($person);
        $this->entityManager->flush();
    }

    public function updatePerson($person, $name, $document)
    {
        $person->setName($name);
        $person->setDocument($document);

        $this->entityManager->persist($person);
        $this->entityManager->flush();
    }

    public function deletePerson($person)
    {
        $this->entityManager->remove($person);
        $this->entityManager->flush();
    }

    public function getPersonById($id)
    {
        return $this->entityManager->getRepository(Person::class)->find($id);
    }

    public function getAllPersons()
    {
        return $this->jsonSerialize($this->entityManager->getRepository(Person::class)->findAll());
    }

    public function jsonSerialize($data)
    {
        $serializedData = [];

        foreach ($data as $person) {
            $serializedPerson = [
                'id' => $person->getId(),
                'name' => $person->getName(),
                'document' => $person->getDocument(),
            ];

            $serializedData[] = $serializedPerson;
        }

        return $serializedData;
    }
}

<?php

namespace App\Helper;

use Doctrine\ORM\EntityManagerInterface;
use App\Model\Contact;
use App\Helper\Helper;
use App\Model\Person;

class ContactHelper extends Helper
{
    public function createContact($tipo, $descricao, $personId)
    {
        $contact = new Contact();
        $contact->setTipo($tipo);
        $contact->setDescricao($descricao);
        $contact->setPerson($this->entityManager->getRepository(Person::class)->find($personId));

        $this->entityManager->persist($contact);
        $this->entityManager->flush();
    }

    public function updateContact($contact, $tipo, $descricao, $personId)
    {   
        $contact->setTipo($tipo);
        $contact->setDescricao($descricao);
        $contact->setPerson($this->entityManager->getRepository(Person::class)->find($personId));

        $this->entityManager->persist($contact);
        $this->entityManager->flush();
    }

    public function deleteContact($contact)
    {
        $this->entityManager->remove($contact);
        $this->entityManager->flush();
    }

    public function getContactById($id)
    {
        return $this->entityManager->getRepository(Contact::class)->find($id);
    }

    public function getAllContacts()
    {
        return $this->jsonSerialize($this->entityManager->getRepository(Contact::class)->findAll());
    }

    public function jsonSerialize($data)
    {
        $serializedData = [];

        foreach ($data as $contact) {
            $serializedContact = [
                'id' => $contact->getId(),
                'pessoaNome' => $contact->getPerson()->getName(),
                'descricao' => $contact->getDescricao(),
                'tipo' => $contact->getTipo(),
            ];

            $serializedData[] = $serializedContact;
        }

        return $serializedData;
    }
}

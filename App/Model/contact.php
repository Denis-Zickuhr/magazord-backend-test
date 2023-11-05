<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contacts")
 */
class Contact
{
    const TIPO_EMAIL = 'Email';
    const TIPO_TELEFONE_FIXO = 'Telefone Fixo';
    const TIPO_TELEFONE_CELULAR = 'Telefone Celular';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, columnDefinition="ENUM('Email', 'Telefone Fixo', 'Telefone Celular')")
     */
    private $tipo;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descricao;

    /**
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="contacts")
     * @ORM\JoinColumn(name="id_person", referencedColumnName="id")
     */
    private $person;

    public function getId()
    {
        return $this->id;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPerson()
    {
        return $this->person;
    }

    public function setPerson($person)
    {
        $this->person = $person;
    }
}

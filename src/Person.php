<?php

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="persons")
 */
class Person
{

    /***
     * @ORM\Id     * 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /***
     * @ORM\Column(type="string")
     */
    protected $firstName;

    /***
     * @ORM\Column(type="string")
     */
    protected $lastName;

    /***
     * @ORM\Column(type="string")
     */
    protected $email;


    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirtsName($fname)
    {
        $this->firstName = $fname;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lname)
    {
        $this->LastName = $lname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function toString()
    {
        return $this->firstName . " " . $this->lastName . " " . $this->email;
    }
}

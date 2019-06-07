<?php

namespace App\models\entities;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends Entity{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
    
     
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string")
    
    
     */
    protected $password;


    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime") 
     */
    protected $updated_at;

    public function __construct()
    {
        $this->created_at= new \DateTime('now');
        $this->updated_at= new \DateTime('now');
    }

}
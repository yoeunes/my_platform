<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartenir
 *
 * @ORM\Table("appartenir")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\AppartenirRepository")
 */
class Appartenir
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_a", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_a;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_a;
    }
}

<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Table("contenir")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\ContenirRepository")
 */
class Contenir
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_co", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_co;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_co;
    }
}

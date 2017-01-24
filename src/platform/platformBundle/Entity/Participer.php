<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participer
 *
 * @ORM\Table("participer")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\ParticiperRepository")
 */
class Participer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_p", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_p;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_p;
    }
}

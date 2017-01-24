<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table("team")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\TeamRepository")
 */
class Team
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_t", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_t;

    /**
     * @var string
     *
     * @ORM\Column(name="nomTeam", type="string", length=100)
     */
    private $nomTeam;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_t;
    }

    /**
     * Set nomTeam
     *
     * @param string $nomTeam
     * @return Team
     */
    public function setNomTeam($nomTeam)
    {
        $this->nomTeam = $nomTeam;

        return $this;
    }

    /**
     * Get nomTeam
     *
     * @return string 
     */
    public function getNomTeam()
    {
        return $this->nomTeam;
    }
}

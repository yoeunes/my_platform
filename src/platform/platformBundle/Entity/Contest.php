<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contest
 *
 * @ORM\Table("contest")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\ContestRepository")
 */
class Contest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_c", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_c;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_c;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Contest
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Contest
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }
}

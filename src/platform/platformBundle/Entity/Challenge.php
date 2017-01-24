<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Challenge
 *
 * @ORM\Table("challenge")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\ChallengeRepository")
 */
class Challenge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ch", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_ch;

    /**
     * @var string
     *
     * @ORM\Column(name="nomChallenge", type="string", length=255)
     */
    private $nomChallenge;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=255)
     */
    private $difficulte;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="string", length=255)
     */
    private $solution;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_ch;
    }

    /**
     * Set nomChallenge
     *
     * @param string $nomChallenge
     * @return Challenge
     */
    public function setNomChallenge($nomChallenge)
    {
        $this->nomChallenge = $nomChallenge;

        return $this;
    }

    /**
     * Get nomChallenge
     *
     * @return string 
     */
    public function getNomChallenge()
    {
        return $this->nomChallenge;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Challenge
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Challenge
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     * @return Challenge
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string 
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Challenge
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Challenge
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set solution
     *
     * @param string $solution
     * @return Challenge
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string 
     */
    public function getSolution()
    {
        return $this->solution;
    }
}

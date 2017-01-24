<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table("utilisateur")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_u", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_u;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUser", type="string", length=100)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomUser", type="string", length=100)
     */
    private $prenomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="emailUser", type="string", length=255)
     */
    private $emailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoName", type="string", length=100)
     */
    private $pseudoName;

    /**
     * @var string
     *
     * @ORM\Column(name="universite", type="string", length=255)
     */
    private $universite;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var integer
     *
     * @ORM\Column(name="role", type="integer")
     */
    private $role;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_u;
    }

    /**
     * Set nomUser
     *
     * @param string $nomUser
     * @return Utilisateur
     */
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get nomUser
     *
     * @return string 
     */
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set prenomUser
     *
     * @param string $prenomUser
     * @return Utilisateur
     */
    public function setPrenomUser($prenomUser)
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    /**
     * Get prenomUser
     *
     * @return string 
     */
    public function getPrenomUser()
    {
        return $this->prenomUser;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     * @return Utilisateur
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string 
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set pseudoName
     *
     * @param string $pseudoName
     * @return Utilisateur
     */
    public function setPseudoName($pseudoName)
    {
        $this->pseudoName = $pseudoName;

        return $this;
    }

    /**
     * Get pseudoName
     *
     * @return string 
     */
    public function getPseudoName()
    {
        return $this->pseudoName;
    }

    /**
     * Set universite
     *
     * @param string $universite
     * @return Utilisateur
     */
    public function setUniversite($universite)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return string 
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Utilisateur
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set role
     *
     * @param integer $role
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }
}

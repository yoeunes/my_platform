<?php

namespace platform\platformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Submission
 *
 * @ORM\Table("submission")
 * @ORM\Entity(repositoryClass="platform\platformBundle\Repository\SubmissionRepository")
 */
class Submission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSub", type="datetime")
     */
    private $dateSub;

    /**
     * @var string
     *
     * @ORM\Column(name="verdict", type="string", length=20)
     */
    private $verdict;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse", type="string", length=255)
     */
    private $reponse;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateSub
     *
     * @param \DateTime $dateSub
     * @return Submission
     */
    public function setDateSub($dateSub)
    {
        $this->dateSub = $dateSub;

        return $this;
    }

    /**
     * Get dateSub
     *
     * @return \DateTime 
     */
    public function getDateSub()
    {
        return $this->dateSub;
    }

    /**
     * Set verdict
     *
     * @param string $verdict
     * @return Submission
     */
    public function setVerdict($verdict)
    {
        $this->verdict = $verdict;

        return $this;
    }

    /**
     * Get verdict
     *
     * @return string 
     */
    public function getVerdict()
    {
        return $this->verdict;
    }

    /**
     * Set reponse
     *
     * @param string $reponse
     * @return Submission
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string 
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}

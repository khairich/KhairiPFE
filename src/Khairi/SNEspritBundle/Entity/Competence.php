<?php

namespace Khairi\SNEspritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="Khairi\SNEspritBundle\Repository\CompetenceRepository")
 */
class Competence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="BackendBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $idUser;

    /**
     *
     * @var array
     * @ORM\ManyToMany(targetEntity="Khairi\SNEspritBundle\Entity\Tag",cascade={"persist"})
     */
    private $expert;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Competence
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set expert
     *
     * @param array $expert
     *
     * @return Competence
     */
    public function setExpert($expert)
    {
        $this->expert = $expert;

        return $this;
    }

    

  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->expert = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add expert
     *
     * @param \Khairi\SNEspritBundle\Entity\Tag $expert
     *
     * @return Competence
     */
    public function addExpert(\Khairi\SNEspritBundle\Entity\Tag $expert)
    {
        $this->expert[] = $expert;

        return $this;
    }

    /**
     * Remove expert
     *
     * @param \Khairi\SNEspritBundle\Entity\Tag $expert
     */
    public function removeExpert(\Khairi\SNEspritBundle\Entity\Tag $expert)
    {
        $this->expert->removeElement($expert);
    }
    /**
     * Get expert
     *
     * @return array
     */
    public function getExpert()
    {
        return $this->expert;
    }
}

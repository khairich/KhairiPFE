<?php

namespace Groupes\SNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="Groupes\SNBundle\Repository\groupeRepository")
 */
class groupe
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
     * @var bool
     *
     * @ORM\Column(name="Symfony", type="boolean", nullable=true)
     */
    private $symfony;

    /**
     * @var bool
     *
     * @ORM\Column(name="Java", type="boolean", nullable=true)
     */
    private $java;

    /**
     * @var bool
     *
     * @ORM\Column(name="Angular", type="boolean", nullable=true)
     */
    private $angular;

    /**
     * @var bool
     *
     * @ORM\Column(name="PHP", type="boolean", nullable=true)
     */
    private $pHP;

    /**
     * @var bool
     *
     * @ORM\Column(name="Html", type="boolean", nullable=true)
     */
    private $html;

    /**
     * @var bool
     *
     * @ORM\Column(name="C", type="boolean", nullable=true)
     */
    private $c;

    /**
     * @var bool
     *
     * @ORM\Column(name="Ajax", type="boolean", nullable=true)
     */
    private $ajax;

    /**
     * @var bool
     *
     * @ORM\Column(name="Css", type="boolean", nullable=true)
     */
    private $css;

    /**
     * @var bool
     *
     * @ORM\Column(name="Linux", type="boolean", nullable=true)
     */
    private $linux;

    /**
     * @var bool
     *
     * @ORM\Column(name="J2EE", type="boolean", nullable=true)
     */
    private $j2EE;


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
     * Set symfony
     *
     * @param boolean $symfony
     *
     * @return groupe
     */
    public function setSymfony($symfony)
    {
        $this->symfony = $symfony;

        return $this;
    }

    /**
     * Get symfony
     *
     * @return bool
     */
    public function getSymfony()
    {
        return $this->symfony;
    }

    /**
     * Set java
     *
     * @param boolean $java
     *
     * @return groupe
     */
    public function setJava($java)
    {
        $this->java = $java;

        return $this;
    }

    /**
     * Get java
     *
     * @return bool
     */
    public function getJava()
    {
        return $this->java;
    }

    /**
     * Set angular
     *
     * @param boolean $angular
     *
     * @return groupe
     */
    public function setAngular($angular)
    {
        $this->angular = $angular;

        return $this;
    }

    /**
     * Get angular
     *
     * @return bool
     */
    public function getAngular()
    {
        return $this->angular;
    }

    /**
     * Set pHP
     *
     * @param boolean $pHP
     *
     * @return groupe
     */
    public function setPHP($pHP)
    {
        $this->pHP = $pHP;

        return $this;
    }

    /**
     * Get pHP
     *
     * @return bool
     */
    public function getPHP()
    {
        return $this->pHP;
    }

    /**
     * Set html
     *
     * @param boolean $html
     *
     * @return groupe
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return bool
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set c
     *
     * @param boolean $c
     *
     * @return groupe
     */
    public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    /**
     * Get c
     *
     * @return bool
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set ajax
     *
     * @param boolean $ajax
     *
     * @return groupe
     */
    public function setAjax($ajax)
    {
        $this->ajax = $ajax;

        return $this;
    }

    /**
     * Get ajax
     *
     * @return bool
     */
    public function getAjax()
    {
        return $this->ajax;
    }

    /**
     * Set css
     *
     * @param boolean $css
     *
     * @return groupe
     */
    public function setCss($css)
    {
        $this->css = $css;

        return $this;
    }

    /**
     * Get css
     *
     * @return bool
     */
    public function getCss()
    {
        return $this->css;
    }

    /**
     * Set linux
     *
     * @param boolean $linux
     *
     * @return groupe
     */
    public function setLinux($linux)
    {
        $this->linux = $linux;

        return $this;
    }

    /**
     * Get linux
     *
     * @return bool
     */
    public function getLinux()
    {
        return $this->linux;
    }

    /**
     * Set j2EE
     *
     * @param boolean $j2EE
     *
     * @return groupe
     */
    public function setJ2EE($j2EE)
    {
        $this->j2EE = $j2EE;

        return $this;
    }

    /**
     * Get j2EE
     *
     * @return bool
     */
    public function getJ2EE()
    {
        return $this->j2EE;
    }
      /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return groupe
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
}


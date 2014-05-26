<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * University
 */
class University
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var integer
     */
    private $accreditationalLevel;

    /**
     * @var \DateTime
     */
    private $yearOfFoundation;


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
     * Set fullName
     *
     * @param string $fullName
     * @return University
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return University
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set accreditationalLevel
     *
     * @param integer $accreditationalLevel
     * @return University
     */
    public function setAccreditationalLevel($accreditationalLevel)
    {
        $this->accreditationalLevel = $accreditationalLevel;

        return $this;
    }

    /**
     * Get accreditationalLevel
     *
     * @return integer 
     */
    public function getAccreditationalLevel()
    {
        return $this->accreditationalLevel;
    }

    /**
     * Set yearOfFoundation
     *
     * @param \DateTime $yearOfFoundation
     * @return University
     */
    public function setYearOfFoundation($yearOfFoundation)
    {
        $this->yearOfFoundation = $yearOfFoundation;

        return $this;
    }

    /**
     * Get yearOfFoundation
     *
     * @return \DateTime 
     */
    public function getYearOfFoundation()
    {
        return $this->yearOfFoundation;
    }
}

<?php

namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator;

/**
 * Class Address
 * @package BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator
 */
class Address
{
    /**
     * @var
     */
    private $street;
    /**
     * @var
     */
    private $buildingNumber;
    /**
     * @var
     */
    private $city;
    /**
     * @var
     */
    private $country;

    /**
     * @param mixed $buildingNumber
     * @return $this
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;

    }

    /**
     * @param mixed $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;

    }

    /**
     * @param mixed $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param mixed $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return "Object located by address {$this->country}, {$this->city}, {$this->street}, {$this->buildingNumber}";
    }
} 
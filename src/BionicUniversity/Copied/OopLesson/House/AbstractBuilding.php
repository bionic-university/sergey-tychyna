<?php
namespace BionicUniversity\VladyslavVolkov\OopLesson\House;

use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\Address;
use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\LocateInterface;
use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\ObjectInformationTrait;

/**
 * Class Building
 * @package BionicUniversity\VladyslavVolkov\OopLesson\House
 */
abstract class AbstractBuilding implements LocateInterface
{
    protected $address;

    public function __construct()
    {
        $this->address = new Address();
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->address;
    }
}
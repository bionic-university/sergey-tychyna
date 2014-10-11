<?php

namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator;

/**
 * Class Human
 * @package BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator
 */
class Human implements LocateInterface
{
    /**
     * @var Coordinate
     */
    private $coordinate;

    public function __construct(Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return "Object located on latitude: {$this->coordinate->getLatitude()} and longitude {$this->coordinate->getLongitude()}";
    }

}
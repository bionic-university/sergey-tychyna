<?php
namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator;


/**
 * Class Coordinate
 * @package BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator
 */
class Coordinate
{

    /**
     * @var float
     */
    private $latitude;
    /**
     * @var float
     */
    private $longitude;

    function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }


    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

}
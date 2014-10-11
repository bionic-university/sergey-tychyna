<?php
/**
 * Created by PhpStorm.
 * User: askent
 * Date: 13.05.14
 * Time: 17:23
 */

namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\Area;


use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\AbstractArea;

/**
 * Class SquareArea
 * @package BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\Area
 */
class RoundArea extends AbstractArea
{
    /**
     * @var float
     */
    const PI = 3.14;
    /**
     * @var
     */
    private $radius;

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    /**
     * @return float
     */
    public function getAreaSize()
    {
        return 2 * $this->radius * self::PI;
    }

}
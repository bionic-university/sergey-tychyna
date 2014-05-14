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
class SquareArea extends AbstractArea
{

    /**
     * @var
     */
    private $size;

    /**
     * @param float $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }


    /**
     * @return float
     */
    public function getAreaSize()
    {
        return (float)$this->size * $this->size;
    }

}
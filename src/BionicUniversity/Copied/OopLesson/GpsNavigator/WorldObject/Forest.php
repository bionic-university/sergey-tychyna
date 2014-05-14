<?php
namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\WorldObject;

use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\AbstractWorldObject;

/**
 * Class Forest
 * @package BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator
 */
class Forest extends AbstractWorldObject
{
    public function getBackground()
    {
        return 'forest.jpg';
    }

}
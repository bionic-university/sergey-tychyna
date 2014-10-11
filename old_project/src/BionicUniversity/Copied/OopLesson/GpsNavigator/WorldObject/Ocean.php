<?php
namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\WorldObject;

use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\BackgroundInterface;

class Ocean implements BackgroundInterface
{
    /**
     * @return string
     */
    public function getBackground()
    {
        return 'ocean.jpg';
    }


} 
<?php
namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator;

abstract class AbstractWorldObject implements LocateInterface, BackgroundInterface
{

    /**
     * @var AbstractArea
     */
    protected $area;

    /**
     * @param AbstractArea $area
     */
    public function __construct(AbstractArea $area)
    {
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return "This object accommodates area of  {$this->area->getAreaSize()} with {$this->getBackground()} color";
    }


} 
<?php
namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator;

/**
 * Class GpsNavigator
 * @package BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator
 */
class GpsNavigator
{
    /**
     * @var LocateInterface[]
     */
    private $objects = array();

    /**
     * @throws \Exception
     */
    public function initiate()
    {
        $objects = func_get_args();
        foreach ($objects as $object) {
            if (!$object instanceof LocateInterface) {
                throw new \Exception('Could not initiate GPS Navigator with these objects');
            }
            $this->objects[] = $object;
        }
    }

    /**
     *
     */
    public function show()
    {
        foreach ($this->objects as $object) {
            echo $object->getLocation() . PHP_EOL;
        }
    }

} 
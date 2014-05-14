<?php
namespace BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator;

/**
 * Class ObjectInformationTrait
 * @package BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator
 */
trait ObjectInformationTrait
{

    /**
     * @var
     */
    private $reflection;

    /**
     * @return \ReflectionClass
     */
    private function getReflection()
    {
        if (null === $this->reflection) {
            $this->reflection = new \ReflectionClass($this);
        }

        return $this->reflection;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getReflection()->getName();

    }

    /**
     * @return array
     */
    public function getConstants()
    {
        return $this->getReflection()->getConstants();
    }
} 
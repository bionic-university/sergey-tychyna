<?php
namespace BionicUniversity\VladyslavVolkov\TestsLesson\Sample;

/**
 * Class ClassSample
 * @package BionicUniversity\VladyslavVolkov\TestsLesson\Sample
 */
class ClassSample
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var
     */
    private $age;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}
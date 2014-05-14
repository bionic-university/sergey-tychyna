<?php
namespace BionicUniversity\VladyslavVolkov\TestsLesson\Tests;


use BionicUniversity\VladyslavVolkov\TestsLesson\Sample\ClassSample;

class ClassSampleTest extends \PHPUnit_Framework_TestCase
{
    public function testSetName()
    {
        $intro = new ClassSample();
        $name = 'Vlad';
        $intro->setName($name);
        $this->assertEquals($name, $intro->getName());
    }
} 
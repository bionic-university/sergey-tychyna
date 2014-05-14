<?php
require __DIR__ . '/../bootstrap.php';
use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\GpsNavigator;
use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\WorldObject\Forest;
use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\Area\SquareArea;
use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\Coordinate;
use BionicUniversity\VladyslavVolkov\OopLesson\GpsNavigator\Human;
use BionicUniversity\VladyslavVolkov\OopLesson\House\School;

$gpsNavigator = new GpsNavigator();
$object1 = new Forest((new SquareArea())->setSize(12));
$object2 = new Human(new Coordinate(30.55, 51.12));
$object3 = new School();
$object3->getAddress()->setCountry('UA')->setCity('Kiev')->setStreet('Skovorody')->setBuildingNumber(2);
$gpsNavigator->initiate($object1, $object2, $object3);


$gpsNavigator->show();

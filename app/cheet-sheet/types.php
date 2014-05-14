<?php

$integer = 1;
$float = 11.60;
$string = 'Some string';
$boolean = false;



echo "Scalar types" . PHP_EOL;
var_dump($integer, $float, $string, $boolean);

$null = null;
$resource = fopen('.gitignore', 'r');
$assocArray = array('fruits' => array('green' => 'kiwi', 'orange' => array('mandarin')));
$object = new stdClass();
$callableObject = function () {
};

echo "Non-scalar & structures" . PHP_EOL;
var_dump($null, $resource, $assocArray, $object, $callableObject);
<?php

$bool = false;
$int = (int)$bool; // 0

$string = 'empty123123123';
$int = (int)$string; // 0

// Comparing
$object = new stdClass();
$object->key = 'value';

if (1 == '1') { // equal
    if (1 == true) { // equal
        if (['key' => 'value'] != $object) { // but current array and object NOT equal
            print 'This line will be displayed...';
        }
    }
}


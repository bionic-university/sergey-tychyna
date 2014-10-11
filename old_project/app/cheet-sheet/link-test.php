<?php

$array = [1,2,3,4,5];
$doubledArray = [];
foreach ($array as $key => $value) {
    $doubledArray[$key] = $value * 2;
}

$doubledArray = array_map(function($value) {
    return $value * 2;
}, $array);

$rawData = [' asdsa', 's23 123 '];

foreach($rawData as $value) {
$data[] = trim($value);
}

function doubleValue() {

}


array_walk($rawData, 'trim');



foreach($array as &$value) {
    $value *= 2; // $value = $value * 2;
}
// Better unset reference variable at this point
// in order do not to accidentally change 
// the last value of the array below in code 
unset($value);



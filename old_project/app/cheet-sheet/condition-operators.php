<?php

$number = 1234;

if ('12' == $number) {
    echo 12;
} elseif (1234 == $number) {
    echo 1234;
} else {
    echo 'No number';
    echo 'Exiting';
}

switch ($number) {
    case '12':
        echo 12;
        break;
    case 1234:
        echo 'Bingo';
        break;
    default:
        echo 'No number';
        echo 'Exiting';
        break;

}


if (2014 === date('Y')) {
    echo 'Hello from current year';
} else {
    echo 'Hello from past';
}
echo (2014 === date('Y')) ? 'Hello from current year' : 'Hello from past';

// Cycles

while (true) {
    $i = 0;
}

while ($row = mysql_fetch_assoc($resource)) {
    echo $row['id'];
    $data[] = $row;
}

$output = [];
$row = null;
while ($row = fgetcsv($handle)) {
    $data[] = $row;

    $output[] = $data['id'];
}

do {
    echo 'Current year is 2013';
} while (2013 === date('Y'));

function getLetter()
{
    return rand('a', 'z');
}

for ($i = 'a'; $i != 'x'; $i = getLetter()) {

}

for ($i = 0; $i <= 100; $i++) {

}

foreach (range(1, 99) as $key => $element) {
    echo $key;
}

$food = [
    'fruits' => [
        'orange',
        'apple'
    ],
    'vegetables' => [
        'potato'
    ],
];

foreach ($food as $type => $fruitValues) {
//    if ('fruits' !== $type) {
    foreach ($fruitValues as $value) {
        if ('apple' === $value) {
            echo 'Apple!!!';
//            break;
        } else {
            continue;
        }
    }
//    }

}

foreach ($food['fruits'][0] as $fruit) {
    echo $fruit; // orange
}

$array = new SplStack(array(11, 1, 2, 3, 4, 5, 6));
$array->getIteratorMode(SplStack::IT_MODE_FIFO);


foreach ($array as $value) {

}

$arrayObject = new ArrayObject(['key' => ' 123']);
trim($arrayObject->offsetGet('key'));

$arrayObject->uksort(function ($value) {
    return $value > 1 ? $value : -1;
});

<?php

foreach (range(1, 10) as $value) {
    if (0 === ($value % 3)) {
        break;
    } else {
        echo $value . PHP_EOL;
    }
}

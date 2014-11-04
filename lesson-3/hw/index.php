<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    include getcwd() . '/src/'. __NAMESPACE__ . $class . '.php';
});

$singer = new Music\Singer();
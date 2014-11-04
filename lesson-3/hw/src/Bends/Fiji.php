<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/4/14
 * Time: 3:28 PM
 */

namespace Music\Bends;


class Fiji  extends BendAbstract {

    protected function setGenre($genre)
    {

    }
    public function __construct()
    {
        echo 'I am Emma Fijerald and I am singing JAZZ music' . PHP_EOL;
        $this->setGenre('fiji');
        return $this->genre = 'fiji';
    }
}
<?php

namespace Music\Bends;

use Music\GenreFabric;

class Fiji  extends BendAbstract {

    protected function setGenre($genre)
    {
        $this->genre = new GenreFabric($genre);
        $this->genre = $this->genre->getGenre()->getGenre();

    }
    public function __construct()
    {
        echo 'I am Emma Fijerald and I am singing JAZZ music' . PHP_EOL;
        $this->setGenre('jazz');
        return $this->genre;
    }
}
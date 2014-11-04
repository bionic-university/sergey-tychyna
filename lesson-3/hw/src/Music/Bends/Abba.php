<?php

namespace Music\Bends;

use Music\GenreFabric;

class Abba extends BendAbstract {

    protected function setGenre($genre)
    {

        $this->genre = new GenreFabric($genre);
        $this->genre = $this->genre->getGenre()->getGenre();
    }
    public function __construct()
    {
        echo 'I am ABBA and I am singing POP music' . PHP_EOL;
        $this->setGenre('pop');
        return $this->genre;

    }

} 
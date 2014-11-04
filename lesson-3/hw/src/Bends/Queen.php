<?php

namespace Music\Bends;
use Music\GenreFabric;

/**
 * Class Queen
 *
 * @package Music\Bends
 */
class Queen extends BendAbstract {

    /**
     * @param $genre
     */
    protected function setGenre($genre)
    {
        $this->genre = new GenreFabric($genre);
        $this->genre = $this->genre->genre->genre;
    }

    /**
     *
     */
    public function __construct()
    {
        echo 'I am Queen and I am singing ROCK music' . PHP_EOL;
        $this->setGenre('rock');
        return $this->genre;
    }
}
<?php

namespace Music\Bends;


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

    }

    /**
     *
     */
    public function __construct()
    {
        echo 'I am Queen and I am singing ROCK music' . PHP_EOL;
        $this->setGenre('rock');
        return $this->genre = 'rock';
    }
}
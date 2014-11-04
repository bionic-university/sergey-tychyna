<?php

namespace Music\Genres;

/**
 * Class GenreAbstract
 * @package Music\Genres
 */
abstract class GenreAbstract {
    /**
     * @var string
     */
    protected $genre = '';

    /**
     * @return mixed
     */
    abstract protected function genreChecker();

    /**
     * @return string
     */
    public function getGenre(){
        return $this->genre;
    }



} 
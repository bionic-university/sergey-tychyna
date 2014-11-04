<?php

namespace Music\Genres;

/**
 * Class GenreAbstract
 *
 * @package Music\Genres
 */
abstract class GenreAbstract {
    /**
     * @var string
     */
    public $genre = '';

    /**
     * @return mixed
     */
    abstract protected function genreChecker();


} 
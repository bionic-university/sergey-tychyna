<?php

namespace Music\Genres;

/**
 * Class Pop
 *
 * @package Music\Genres
 */
class Rock extends GenreAbstract {

    /**
     *
     */
    public function __construct()
    {
        $this->genre = 'rock';
        return $this->genre;
    }

    /**
     * @return string
     */
    public function genreChecker()
    {
        return 'rock';
    }
} 
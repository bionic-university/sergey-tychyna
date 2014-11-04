<?php

namespace Music\Genres;

/**
 * Class Pop
 *
 * @package Music\Genres
 */
class Jazz extends GenreAbstract {

    /**
     *
     */
    public function __construct()
    {
        $this->genre = 'jazz';
        return $this->genre;
    }

    /**
     * @return string
     */
    public function genreChecker()
    {
        return 'jazz';
    }
} 
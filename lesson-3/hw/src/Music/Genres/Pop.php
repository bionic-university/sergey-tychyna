<?php

namespace Music\Genres;

/**
 * Class Pop
 *
 * @package Music\Genres
 */
class Pop extends GenreAbstract {

    /**
     *
     */
    public function __construct()
    {
        $this->genre = 'pop';
        return $this->genre;
    }

    /**
     * @return string
     */
    public function genreChecker()
    {
        return 'pop';
    }
} 
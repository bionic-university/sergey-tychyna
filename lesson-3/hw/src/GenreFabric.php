<?php

namespace Music;


use Music\Genres\GenreAbstract;
use Music\Genres\Pop;
require_once(getcwd() . '/src/Gernes/GenreAbstract.php');

/**
 * Class GenreFabric
 *
 * @package Music
 */
class GenreFabric extends GenreAbstract {

    /**
     * @param $genre
     */
    public function __construct($genre)
    {
        switch($genre) {
            case 'pop':
                require_once(getcwd() . '/src/Gernes/Pop.php');
                $this->genre = new Pop();
                break;
        }
    }

    /**
     *
     */
    protected function genreChecker()
    {

    }

} 
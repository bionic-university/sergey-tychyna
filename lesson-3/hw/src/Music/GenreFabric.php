<?php

namespace Music;


use Music\Genres\GenreAbstract;
use Music\Genres\Pop;

/**
 * Class GenreFabric
 *
 * @package Music
 */
class GenreFabric extends \Music\Genres\GenreAbstract {

    /**
     * @param $genre
     * @throws \Exception
     */
    public function __construct($genre)
    {
        switch($genre) {
            case 'pop':
                $this->genre = new \Music\Genres\Pop();
                break;
            case 'rock':
                $this->genre = new \Music\Genres\Rock();
                break;
            case 'jazz':
                $this->genre = new \Music\Genres\Jazz();
                break;
            default:
                throw new \Exception($genre . ' is not in my list! Only pop, rock, jazz');
        }
    }

    /**
     *
     */
    protected function genreChecker()
    {

    }

} 
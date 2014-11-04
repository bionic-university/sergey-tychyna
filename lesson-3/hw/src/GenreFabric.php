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
     * @throws \Exception
     */
    public function __construct($genre)
    {
        switch($genre) {
            case 'pop':
                require_once(getcwd() . '/src/Gernes/Pop.php');
                $this->genre = new Pop();
                break;
            case 'rock':
                require_once(getcwd() . '/src/Gernes/Rock.php');
                $this->genre = new Rock();
                break;
            case 'jazz':
                require_once(getcwd() . '/src/Gernes/Jazz.php');
                $this->genre = new Jazz();
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
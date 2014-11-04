<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/4/14
 * Time: 1:55 PM
 */

namespace Music;

use Music\Bends\BendAbstract;

/**
 * Class BendFabric
 *
 * @package Music
 */
class BendFabric  extends \Music\Bends\BendAbstract{

    /**
     * @param $bend
     * @throws \Exception
     */
    function __construct($bend)
    {
        switch($bend) {
            case 'abba':
                $this->bend = new \Music\Bends\Abba();
                return $this->genre = $this->bend->genre;
                break;
            case 'queen':
                $this->bend = new \Music\Bends\Queen();
                return $this->genre = $this->bend->genre;
                break;
            case 'fiji':
                $this->bend = new \Music\Bends\Fiji();
                return $this->genre = $this->bend->genre;
                break;
            default:
                throw new \Exception($bend . ' is not in my list! Only Abba, Queen and Fiji (Emma Fijerald)');

        }
    }

    /**
     * @param $genre
     */
    protected function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
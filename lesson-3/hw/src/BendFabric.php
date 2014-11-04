<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/4/14
 * Time: 1:55 PM
 */

namespace Music;
require_once(getcwd() . '/src/Bends/BendAbstract.php');
require_once(getcwd() . '/src/GenreFabric.php');
use Music\Bends\BendAbstract;

/**
 * Class BendFabric
 *
 * @package Music
 */
class BendFabric  extends BendAbstract{

    /**
     * @param $bend
     * @throws \Exception
     */
    function __construct($bend)
    {
        switch($bend) {
            case 'abba':
                require_once(getcwd() . '/src/Bends/Abba.php');
                $this->bend = new \Music\Bends\Abba();
                return $this->genre = $this->bend->genre;
                break;
            case 'queen':
                require_once(getcwd() . '/src/Bends/Queen.php');
                $this->bend = new \Music\Bends\Queen();
                return $this->genre = $this->bend->genre;
                break;
            case 'fiji':
                require_once(getcwd() . '/src/Bends/Fiji.php');
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
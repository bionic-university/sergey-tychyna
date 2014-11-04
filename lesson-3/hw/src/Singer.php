<?php

namespace Music;

require_once(getcwd() . '/src/MusicInterface.php');

/**
 * Class Singer
 *
 * @package Music
 */
class Singer implements MusicInterface {
    /**
     * @var BendFabric
     */
    private $bend;
    /**
     * @var
     */
    private $genre;

    /**
     *
     */
    public function __construct()
     {
         if(count($_SERVER['argv']) == 3){
             try {
                 $this->bend = new BendFabric($_SERVER['argv'][1]);
             } catch(Exception $e) {
                 echo $e->getMessage();
             }
             $this->sing();
         } else {
             echo 'Please enter singer name and genre' . PHP_EOL;
         }

     }

    /**
     *
     */
    public function sing()
    {
        $param = $this->bend->getGenre();
        if((string)$param == (string)$_SERVER['argv'][2]) {
            echo 'I can sing this song!' . PHP_EOL;
        } else {
            echo 'But I am don\'t sing ' . strtoupper($_SERVER['argv'][2]) . ' songs' . PHP_EOL;
        }
    }
} 
<?php

namespace Music;

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
     * @var BendFabric
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
             echo 'Please enter singer name and genre. For example: abba pop' . PHP_EOL;
         }

     }

    /**
     *
     */
    public function sing()
    {
        $this->genre = $this->bend->getGenre();
        if((string)$this->genre == (string)$_SERVER['argv'][2]) {
            echo 'I can sing this song!' . PHP_EOL;
        } else {
            echo 'But I am don\'t sing ' . strtoupper($_SERVER['argv'][2]) . ' songs' . PHP_EOL;
        }
    }
} 
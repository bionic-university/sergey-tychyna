<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/4/14
 * Time: 2:57 PM
 */

namespace Music\Bends;


use Music\GenreFabric;

class Abba extends BendAbstract {

    protected function setGenre($genre)
    {

        $this->genre = new GenreFabric($genre);
        //echo $this->genre->genre->genre;
    }
    public function __construct()
    {
        echo 'I am ABBA and I am singing POP music' . PHP_EOL;
        $this->setGenre('pop');
        return $this->genre = 'pop';

    }

} 
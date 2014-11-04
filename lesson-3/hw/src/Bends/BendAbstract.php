<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/4/14
 * Time: 2:55 PM
 */

namespace Music\Bends;


abstract class BendAbstract {
    protected $bend;
    public  $genre;

    abstract protected function setGenre($band);
    public function getGenre()
    {
        return $this->genre;
    }
}
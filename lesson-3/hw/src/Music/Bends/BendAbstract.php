<?php

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
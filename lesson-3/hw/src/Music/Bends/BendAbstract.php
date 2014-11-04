<?php

namespace Music\Bends;


/**
 * Class BendAbstract
 * @package Music\Bends
 */
abstract class BendAbstract {
    /**
     * @var
     */
    protected $bend;
    /**
     * @var
     */
    public  $genre;

    /**
     * @param $band
     * @return mixed
     */
    abstract protected function setGenre($band);

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
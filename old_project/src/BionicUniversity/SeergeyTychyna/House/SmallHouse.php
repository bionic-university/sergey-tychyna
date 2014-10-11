<?php

/**
 * Class SmallHouse
 */
class SmallHouse extends AbstractHouse {

    /**
     * @var float
     */
    protected $loft_height;

    /**
     * @return float
     */
    public function getTotalHouseHeight()
    {
        return $this->floors * $this->floor_height + $this->loft_height;
    }

    /**
     * @param float $loft_height
     */
    public function setLoftHeight($loft_height)
    {
        $this->loft_height = $loft_height;
    }

    /**
     * @return float
     */
    public function getLoftHeight()
    {
        return $this->loft_height;
    }




}
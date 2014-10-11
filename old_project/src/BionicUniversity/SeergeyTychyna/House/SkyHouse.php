<?php
/**
 * Class SmallHouse
 */
class SkyHouse extends AbstractHouse {
    /**
     * @var int
     */
    protected $parking_floors;
    /**
     * @var float
     */
    protected $parking_floor_height;

    /**
     * @return float
     */
    public function getTotalHouseHeight()
    {
        return $this->floors * $this->floor_height + $this->parking_floors * $this->parking_floor_height;
    }
}
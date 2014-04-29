<?php

/**
 * Class AbstractHouse
 */
abstract class AbstractHouse {
    /**
     * @var int
     */
    protected $floors;
    /**
     * @var float
     */
    protected $square;
    /**
     * @var float
     */
    protected $floor_height;
    /**
     * @vat int
     */
    protected $count_windows_per_floor;
    /**
     * @var int
     */
    protected $count_doors_per_floor;

    /**
     * @return float
     */
    abstract public function getTotalHouseHeight();

    /**
     * @param int $count_doors_per_floor
     */
    public function setCountDoorsPerFloor($count_doors_per_floor)
    {
        $this->count_doors_per_floor = $count_doors_per_floor;
    }

    /**
     * @return int
     */
    public function getCountDoorsPerFloor()
    {
        return $this->count_doors_per_floor;
    }

    /**
     * @param mixed $count_windows_per_floor
     */
    public function setCountWindowsPerFloor($count_windows_per_floor)
    {
        $this->count_windows_per_floor = $count_windows_per_floor;
    }

    /**
     * @return mixed
     */
    public function getCountWindowsPerFloor()
    {
        return $this->count_windows_per_floor;
    }

    /**
     * @param float $floor_height
     */
    public function setFloorHeight($floor_height)
    {
        $this->floor_height = $floor_height;
    }

    /**
     * @return float
     */
    public function getFloorHeight()
    {
        return $this->floor_height;
    }

    /**
     * @param int $floors
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;
    }

    /**
     * @return int
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * @param float $square
     */
    public function setSquare($square)
    {
        $this->square = $square;
    }

    /**
     * @return float
     */
    public function getSquare()
    {
        return $this->square;
    }


}
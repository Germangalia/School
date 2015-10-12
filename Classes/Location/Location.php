<?php namespace Com\Iesebre\Dam2\germangalia\Location;

/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 12/10/15
 * Time: 11:14
 */
class Location
{

    /**
     * Name of the center.
     * @var
     */
    public $centerLocation;

    /**
     * Name of the location.
     * @var
     */
    public $nameLocation;

    /**
     * ID of location.
     * @var
     */
    public $IDLocation;

    /**
     * Maxim Capacity of location.
     * @var
     */
    public $capacityLocation;

    /**
     * Location constructor.
     * @param $centerLocation
     * @param $nameLocation
     * @param $IDLocation
     * @param $capacityLocation
     */
    public function __construct($centerLocation, $nameLocation, $IDLocation, $capacityLocation)
    {
        $this->centerLocation = $centerLocation;
        $this->nameLocation = $nameLocation;
        $this->IDLocation = $IDLocation;
        $this->capacityLocation = $capacityLocation;
    }

    /**
     * Get name of center location.
     * @return mixed
     */
    public function getCenterLocation()
    {
        return $this->centerLocation;
    }

    /**
     * Set name of center location.
     * @param mixed $centerLocation
     */
    public function setCenterLocation($centerLocation)
    {
        $this->centerLocation = $centerLocation;
    }

    /**
     * Get name of location.
     * @return mixed
     */
    public function getNameLocation()
    {
        return $this->nameLocation;
    }

    /**
     * Set name of location.
     * @param mixed $nameLocation
     */
    public function setNameLocation($nameLocation)
    {
        $this->nameLocation = $nameLocation;
    }

    /**
     * Get ID of the location.
     * @return mixed
     */
    public function getIDLocation()
    {
        return $this->IDLocation;
    }

    /**
     * Set ID of the location.
     * @param mixed $IDLocation
     */
    public function setIDLocation($IDLocation)
    {
        $this->IDLocation = $IDLocation;
    }

    /**
     * Get the capacity of location
     * @return mixed
     */
    public function getCapacityLocation()
    {
        return $this->capacityLocation;
    }

    /**
     * Set the capacity of location.
     * @param mixed $capacityLocation
     */
    public function setCapacityLocation($capacityLocation)
    {
        $this->capacityLocation = $capacityLocation;
    }

}
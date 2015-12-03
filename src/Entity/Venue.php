<?php

namespace ManipleEvents\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Venue
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \ManipleEvents\Entity\Venue
     */
    protected $parentVenue;

    /**
     * Name of this venue
     * @var string
     */
    protected $name;

    /**
     * Street address of this venue
     * @var string
     */
    protected $address;

    /**
     * City this venue is located in
     * @var string
     */
    protected $city;

    /**
     * ISO 3166-1 alpha-2 country code
     * @var string
     */
    protected $country;

    /**
     * Latitude of this venue
     * @var float
     */
    protected $latitude;

    /**
     * Longitude of this venue
     * @var float
     */
    protected $longitude;

    /**
     * The maximum number of people this venue can host
     * @var int
     */
    protected $capacity;

    /**
     * Sub-venues (e.g. rooms) located within this venus
     * @var \ManipleEvents\Entity\Venue[]
     */
    protected $subVenues;

    public function __construct()
    {
        $this->subVenues = new ArrayCollection();
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        if ($this->city === null && ($parentVenue = $this->getParentVenue())) {
            return $parentVenue->getCity();
        }
        return $this->city;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        if ($this->country === null && ($parentVenue = $this->getParentVenue())) {
            return $parentVenue->getCountry();
        }
        return $this->country;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = (float) $latitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        if ($this->latitude === null && ($parentVenue = $this->getParentVenue())) {
            return $parentVenue->getLatitude();
        }
        return $this->latitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = (float) $longitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        if ($this->longitude === null && ($parentVenue = $this->getParentVenue())) {
            return $parentVenue->getLongitude();
        }
        return $this->longitude;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = (string) $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \ManipleEvents\Entity\Venue $parentVenue
     */
    public function setParentVenue(\ManipleEvents\Entity\Venue $parentVenue)
    {
        $this->parentVenue = $parentVenue;
    }

    /**
     * @return \ManipleEvents\Entity\Venue
     */
    public function getParentVenue()
    {
        return $this->parentVenue;
    }

    /**
     * @return array|\ArrayAccess
     */
    public function getSubVenues()
    {
        return $this->subVenues;
    }
}

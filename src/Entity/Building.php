<?php

namespace ManipleEvents\Entity;

class Building
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Name of this building
     * @var string
     */
    protected $name;

    /**
     * Street address of this building
     * @var string
     */
    protected $address;

    /**
     * City this building is located in
     * @var string
     */
    protected $city;

    /**
     * ISO 3166-1 alpha-2 country code
     * @var string
     */
    protected $country;

    /**
     * Latitude of building venue
     * @var float
     */
    protected $latitude;

    /**
     * Longitude of building venue
     * @var float
     */
    protected $longitude;
}

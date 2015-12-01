<?php

namespace ManipleEvents\Entity;

class Venue
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Room number or designation
     * @var int
     */
    protected $name;

    /**
     * @var \ManipleEvents\Entity\Building[]
     */
    protected $buildings;
}

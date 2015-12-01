<?php

namespace ManipleEvents\Entity;

class Room
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Building this room is located in
     * @var \ManipleEvents\Entity\Building
     */
    protected $building;

    /**
     * Room number or designation
     * @var int
     */
    protected $name;

    /**
     * The maximum number of people this room can host
     * @var int
     */
    protected $capacity;
}

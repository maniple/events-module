<?php

namespace ManipleEvents\Entity;

class Event
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Venue this event is hosted at
     * @var \ManiplEvents\Entity\Venue
     */
    protected $venue;
}

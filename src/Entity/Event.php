<?php

namespace ManipleEvents\Entity;

class Event
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Name (title) of this event
     * @var string
     */
    protected $name;

    /**
     * Start date and time of this event
     * @var \DateTime
     */
    protected $startDate;

    /**
     * Duration in seconds
     * @var int
     */
    protected $duration;

    /**
     * An event that this event is a part of
     * @var \ManipleEvents\Entity\Event
     */
    protected $superEvent;

    /**
     * Events that are a part of this event
     * @var \ManipleEvents\Entity\Event[]
     */
    protected $subEvents;

    /**
     * Building(s) this event is hosted at
     * @var \ManiplEvents\Entity\Building
     */
    protected $buildings;

    /**
     * @var \ManipleEvents\Entity\Participant[]
     */
    protected $participants;

    public function getEndDate()
    {
        $endDate = new \DateTime();
        $endDate->setTimestamp($this->getStartDate() + $this->getDuration());
        return $endDate;
    }
}

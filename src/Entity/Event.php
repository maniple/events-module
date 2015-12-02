<?php

namespace ManipleEvents\Entity;

use Doctrine\Common\Collections\ArrayCollection;

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
    protected $parentEvent;

    /**
     * Events that are a part of this event
     * @var \ManipleEvents\Entity\Event[]
     */
    protected $subEvents;

    /**
     * Venue this event is hosted at
     * @var \ManiplEvents\Entity\Venue
     */
    protected $venue;

    /**
     * @var \ManipleEvents\Entity\Participant[]
     */
    protected $participants;

    /**
     * @var \ManipleEvents\Entity\Track[]
     */
    protected $tracks;

    public function __construct()
    {
        $this->subEvents = new ArrayCollection();
        $this->participants = new ArrayCollection();
        $this->tracks = new ArrayCollection();
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = (int) $duration;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
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
     * @param \ManipleEvents\Entity\Event $parentEvent
     */
    public function setParentEvent(\ManipleEvents\Entity\Event $parentEvent)
    {
        $this->parentEvent = $parentEvent;
    }

    /**
     * @return \ManipleEvents\Entity\Event
     */
    public function getParentEvent()
    {
        return $this->parentEvent;
    }

    /**
     * @return array|ArrayAccess
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return array|ArrayAccess
     */
    public function getSubEvents()
    {
        return $this->subEvents;
    }

    /**
     * @param \ManiplEvents\Entity\Venue $venue
     */
    public function setVenue(\ManiplEvents\Entity\Venue $venue = null)
    {
        $this->venue = $venue;
    }

    /**
     * @return \ManiplEvents\Entity\Venue
     */
    public function getVenue()
    {
        if ($this->venue === null && ($parentEvent = $this->getParentEvent())) {
            return $parentEvent->getVenue();
        }
        return $this->venue;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        $endDate = new \DateTime();
        $endDate->setTimestamp($this->getStartDate() + $this->getDuration());
        return $endDate;
    }
}

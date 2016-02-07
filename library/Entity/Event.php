<?php

namespace Maniple\EventsModule\Entity;

/**
 * @Entity
 * @Table(name="events")
 */
class Event
{
    /**
     * @Id
     * @Column(name="event_id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $_id;

    /**
     * @Column(name="title", type="string", length=255, nullable=false)
     */
    protected $_title;

    /**
     * @Column(name="start_time", type="epoch", nullable=false)
     */
    protected $_startTime;

    /**
     * @Column(name="end_time", type="epoch", nullable=false)
     */
    protected $_endTime;
}

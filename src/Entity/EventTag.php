<?php

namespace ManipleEvents\Entity;

class EventTag
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \ManipleEvents\Entity\Event
     */
    protected $event;

    /**
     * @var \ManipleEvents\Entity\Tag
     */
    protected $tag;

    /**
     * Tag priority
     * @var int
     */
    protected $priority;
}

<?php

namespace ManipleEvents\Entity;

class EventRole
{
    /**
     * @var int
     */
    protected $id;

    /**
     * How roles will be ordered when displaying event persons
     * @var int
     */
    protected $priority;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $namePlural;
}

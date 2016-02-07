<?php

namespace ManipleEvents\Entity;

class EventTaxon implements TaxonInterface
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
     * @var \ManipleEvents\Entity\Taxon
     */
    protected $tag;

    /**
     * Taxon priority
     * @var int
     */
    protected $priority;
}

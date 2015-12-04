<?php

namespace ManipleEvents\Entity;

class Taxon implements TaxonInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \ManipleEvents\Entity\Taxonomy
     */
    protected $taxonomy;

    /**
     * @var string
     */
    protected $name;

    /**
     * Unique within taxonomy, for use in URLs
     * @var
     */
    protected $slug;

    /**
     * @var \ManipleEvents\Entity\Taxon
     */
    protected $parentTag;

    /**
     * @var \ManipleEvents\Entity\Taxon[]
     */
    protected $subTags;
}

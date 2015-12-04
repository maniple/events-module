<?php

namespace ManipleEvents\Entity;

class Tag
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
     * @var \ManipleEvents\Entity\Tag
     */
    protected $parentTag;

    /**
     * @var \ManipleEvents\Entity\Tag[]
     */
    protected $subTags;
}

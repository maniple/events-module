<?php

namespace ManipleEvents\Entity;

class Taxonomy
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * Unique, for use in controllers, templates or URLs
     * @var
     */
    protected $slug;

    /**
     * @var bool
     */
    protected $isHierarchical;

    /**
     * @var array|\ArrayAccess
     */
    protected $tags;
}

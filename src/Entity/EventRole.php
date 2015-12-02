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
     * @param string $namePlural
     */
    public function setNamePlural($namePlural)
    {
        $this->namePlural = (string) $namePlural;
    }

    /**
     * @return string
     */
    public function getNamePlural()
    {
        return $this->namePlural;
    }

    /**
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->priority = (int) $priority;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }


}

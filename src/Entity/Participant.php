<?php

namespace ManipleEvents\Entity;

/**
 * Entity representing event participant
 *
 * @todo Repository must fetch rows along with related persons and eventRoles
 */
class Participant
{
    protected $id;

    /**
     * @var \ManipleEvents\Entity\Event
     */
    protected $event;

    /**
     * @var \ManipleEvents\Entity\Person
     */
    protected $person;

    /**
     * @var \ManipleEvents\Entity\EventRole
     */
    protected $eventRole;

    /**
     * @param \ManipleEvents\Entity\Event $event
     */
    public function setEvent(\ManipleEvents\Entity\Event $event)
    {
        $this->event = $event;
    }

    /**
     * @return \ManipleEvents\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \ManipleEvents\Entity\EventRole $eventRole
     */
    public function setEventRole(\ManipleEvents\Entity\EventRole $eventRole)
    {
        $this->eventRole = $eventRole;
    }

    /**
     * @return \ManipleEvents\Entity\EventRole
     */
    public function getEventRole()
    {
        return $this->eventRole;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \ManipleEvents\Entity\Person $person
     */
    public function setPerson(\ManipleEvents\Entity\Person $person)
    {
        $this->person = $person;
    }

    /**
     * @return \ManipleEvents\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Proxy call to person entity
     *
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws \BadMethodCallException
     */
    public function __call($method, array $args)
    {
        $person = $this->getPerson();
        if (empty($person)) {
            throw new \RuntimeException('Person entity is not provided');
        }
        return call_user_func_array(array($person, $method), $args);
    }
}

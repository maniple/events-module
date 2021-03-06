<?php

namespace ManipleEvents\Entity;

/**
 * Entity representing event participant
 *
 * @todo Repository must fetch rows along with related persons and eventRoles
 */
class Participant implements PersonInterface
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
     * @var \ManipleEvents\Entity\ParticipantRole
     */
    protected $role;

    /**
     * Participant priority, may be relevant when specifying authors
     * @var int
     */
    protected $priority;

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \ManipleEvents\Entity\Event $event
     * @return $this
     */
    public function setEvent(Event $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return \ManipleEvents\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \ManipleEvents\Entity\ParticipantRole|int $role
     * @return $this
     */
    public function setRole($role)
    {
        if (!$role instanceof ParticipantRole) {
            $role = new ParticipantRole($role);
        }
        $this->role = $role;
        return $this;
    }

    /**
     * @return \ManipleEvents\Entity\ParticipantRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param \ManipleEvents\Entity\Person $person
     * @return $this
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * @return \ManipleEvents\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param int $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    public function getFirstName()
    {
        $person = $this->getPerson();
        return $person ? $person->getFirstName() : null;
    }

    public function getLastName()
    {
        $person = $this->getPerson();
        return $person ? $person->getLastName() : null;
    }

    public function getMiddleName()
    {
        $person = $this->getPerson();
        return $person ? $person->getMiddleName() : null;
    }
}

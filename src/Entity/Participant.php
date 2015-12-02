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
     * Proxy call to person entity
     *
     * @param string $method
     * @param array $args
     * @return mixed
     * @throws \BadMethodCallException
     */
    public function __call($method, array $args)
    {
        if (!is_callable(array($this->person, $method))) {
            throw new \BadMethodCallException(sprintf('Method %s::%s does not exists', __CLASS__, $method));
        }
        return call_user_func_array(array($this->person, $method), $args);
    }
}

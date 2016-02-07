<?php

namespace ManipleEvents\Entity;

class ParticipantRole
{
    const ROLE_DEFAULT   = 0x0000;
    const ROLE_PERFORMER = 0x0001;
    const ROLE_SPEAKER   = 0x0002;
    const ROLE_MODERATOR = 0x0004;
    const ROLE_PANELIST  = 0x0008;
    const ROLE_AUTHOR    = 0x0010;

    /**
     * @var int
     */
    protected $value;

    /**
     * @param int $value
     */
    public function __construct($value = self::ROLE_DEFAULT)
    {
        $this->value = (int) $value;
    }

    /**
     * @return bool
     */
    public function isPerformer()
    {
        return $this->hasBit(self::ROLE_PERFORMER);
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function setPerformer($flag = true)
    {
        return $this->setBit(self::ROLE_PERFORMER, $flag);
    }

    /**
     * @return bool
     */
    public function isSpeaker()
    {
        return $this->hasBit(self::ROLE_SPEAKER);
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function setSpeaker($flag = true)
    {
        return $this->setBit(self::ROLE_SPEAKER, $flag);
    }

    /**
     * @return bool
     */
    public function isModerator()
    {
        return $this->hasBit(self::ROLE_MODERATOR);
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function setModerator($flag = true)
    {
        return $this->setBit(self::ROLE_MODERATOR, $flag);
    }

    /**
     * @return bool
     */
    public function isPanelist()
    {
        return $this->hasBit(self::ROLE_PANELIST);
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function setPanelist($flag = true)
    {
        return $this->setBit(self::ROLE_PANELIST, $flag);
    }

    /**
     * @return bool
     */
    public function isAuthor()
    {
        return $this->hasBit(self::ROLE_AUTHOR);
    }

    /**
     * @param bool $flag
     * @return $this
     */
    public function setAuthor($flag = true)
    {
        return $this->setBit(self::ROLE_AUTHOR, $flag);
    }

    /**
     * @param $bit
     * @return bool
     */
    protected function hasBit($bit)
    {
        return (bool) ($this->value & $bit);
    }

    /**
     * @param $bit
     * @param bool $enabled
     * @return $this
     */
    protected function setBit($bit, $enabled = true)
    {
        if ($enabled) {
            $this->value |= $bit;
        } else {
            $this->value &= ~$bit;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }
}

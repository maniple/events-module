<?php

namespace ManipleEventsTest\Entity;

use ManipleEvents\Entity\ParticipantRole;

class ParticipantRoleTest extends \PHPUnit_Framework_TestCase
{
    public function assertDefaultRole(ParticipantRole $role)
    {
        $this->assertFalse($role->isAuthor());
        $this->assertFalse($role->isModerator());
        $this->assertFalse($role->isPanelist());
        $this->assertFalse($role->isPerformer());
        $this->assertFalse($role->isSpeaker());

        $this->assertEquals(0, $role->getValue());
    }

    public function testDefaultRole()
    {
        $role = new ParticipantRole();
        $this->assertDefaultRole($role);
    }

    public function testAuthorRole()
    {
        $role = new ParticipantRole();
        $role->setAuthor(true);

        $this->assertTrue($role->isAuthor());
        $this->assertFalse($role->isModerator());
        $this->assertFalse($role->isPanelist());
        $this->assertFalse($role->isPerformer());
        $this->assertFalse($role->isSpeaker());

        $role->setAuthor(false);
        $this->assertDefaultRole($role);
    }

    public function testModeratorRole()
    {
        $role = new ParticipantRole();
        $role->setModerator(true);

        $this->assertFalse($role->isAuthor());
        $this->assertTrue($role->isModerator());
        $this->assertFalse($role->isPanelist());
        $this->assertFalse($role->isPerformer());
        $this->assertFalse($role->isSpeaker());

        $role->setModerator(false);
        $this->assertDefaultRole($role);
    }

    public function testPanelistRole()
    {
        $role = new ParticipantRole();
        $role->setPanelist(true);

        $this->assertFalse($role->isAuthor());
        $this->assertFalse($role->isModerator());
        $this->assertTrue($role->isPanelist());
        $this->assertFalse($role->isPerformer());
        $this->assertFalse($role->isSpeaker());

        $role->setPanelist(false);
        $this->assertDefaultRole($role);
    }

    public function testPerformerRole()
    {
        $role = new ParticipantRole();
        $role->setPerformer(true);

        $this->assertFalse($role->isAuthor());
        $this->assertFalse($role->isModerator());
        $this->assertFalse($role->isPanelist());
        $this->assertTrue($role->isPerformer());
        $this->assertFalse($role->isSpeaker());

        $role->setPerformer(false);
        $this->assertDefaultRole($role);
    }

    public function testSpeakerRole()
    {
        $role = new ParticipantRole();
        $role->setSpeaker(true);

        $this->assertFalse($role->isAuthor());
        $this->assertFalse($role->isModerator());
        $this->assertFalse($role->isPanelist());
        $this->assertFalse($role->isPerformer());
        $this->assertTrue($role->isSpeaker());

        $role->setSpeaker(false);
        $this->assertDefaultRole($role);
    }
}

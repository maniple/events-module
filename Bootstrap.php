<?php

class EventsModule_Bootstrap extends Maniple_Application_Module_Bootstrap
{
    protected function _initEntityManager()
    {
        /** @var ManipleCore\Doctrine\Config $config */
        $config = $this->getApplication()->getResource('EntityManager.config');
        $config->addPath(__DIR__ . '/library/Entity');
    }
}

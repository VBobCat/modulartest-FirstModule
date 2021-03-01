<?php


namespace ModularTest\FirstModuleBundle\Service;


/**
 * Class FirstService
 * @package ModularTest\FirstModuleBundle\Service
 */
class FirstService
{
    /**
     * @return string
     */
    public function now(): string
    {
        return 'First Service time: '.date('c');
    }
}

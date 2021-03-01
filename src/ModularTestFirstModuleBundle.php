<?php


namespace ModularTest\FirstModuleBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ModularTestFirstModuleBundle
 * @package ModularTest\FirstModuleBundle
 */
class ModularTestFirstModuleBundle extends Bundle
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}

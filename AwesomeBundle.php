<?php

namespace Marcelmc\AwesomeBundle;

use Marcelmc\AwesomeBundle\DependencyInjection\MarcelmcAwesomeExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Lukas Kahwe Smith <smith@pooteeweet.org>
 * @author Eriksen Costa <eriksencosta@gmail.com>
 */
class AwesomeBundle extends Bundle
{
    const ZONE_ATTRIBUTE = '_awesome_zone';

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
    }
    public function getContainerExtension()
    {
        return new MarcelmcAwesomeExtension();
    }
}

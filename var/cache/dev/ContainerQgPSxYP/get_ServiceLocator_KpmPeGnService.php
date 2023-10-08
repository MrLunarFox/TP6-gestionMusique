<?php

namespace ContainerQgPSxYP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KpmPeGnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KpmPeGn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KpmPeGn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'album' => ['privates', '.errored..service_locator.KpmPeGn.App\\Entity\\Album', NULL, 'Cannot autowire service ".service_locator.KpmPeGn": it references class "App\\Entity\\Album" but no such service exists.'],
        ], [
            'album' => 'App\\Entity\\Album',
        ]);
    }
}
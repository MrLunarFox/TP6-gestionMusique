<?php

namespace ContainerQgPSxYP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FXMGuMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fX_MGuM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fX_MGuM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\ArtisteController::ajoutModifArtiste' => ['privates', '.service_locator.zpEjKxM', 'get_ServiceLocator_ZpEjKxMService', true],
            'App\\Controller\\Admin\\ArtisteController::listeArtistes' => ['privates', '.service_locator.bl5HTf8', 'get_ServiceLocator_Bl5HTf8Service', true],
            'App\\Controller\\Admin\\ArtisteController::suprArtiste' => ['privates', '.service_locator.g6U4b5U', 'get_ServiceLocator_G6U4b5UService', true],
            'App\\Controller\\Admin\\StyleController::ajoutModifStyle' => ['privates', '.service_locator.d4fyDVZ', 'get_ServiceLocator_D4fyDVZService', true],
            'App\\Controller\\Admin\\StyleController::listeStyles' => ['privates', '.service_locator.75N9Wt6', 'get_ServiceLocator_75N9Wt6Service', true],
            'App\\Controller\\Admin\\StyleController::suprStyle' => ['privates', '.service_locator.jsQYJf6', 'get_ServiceLocator_JsQYJf6Service', true],
            'App\\Controller\\AlbumController::ficheAlbum' => ['privates', '.service_locator.KpmPeGn', 'get_ServiceLocator_KpmPeGnService', true],
            'App\\Controller\\AlbumController::listeAlbums' => ['privates', '.service_locator.zIgE5An', 'get_ServiceLocator_ZIgE5AnService', true],
            'App\\Controller\\ArtisteController::ficheArtiste' => ['privates', '.service_locator.jvtX91I', 'get_ServiceLocator_JvtX91IService', true],
            'App\\Controller\\ArtisteController::listeArtistes' => ['privates', '.service_locator.bl5HTf8', 'get_ServiceLocator_Bl5HTf8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\ArtisteController:ajoutModifArtiste' => ['privates', '.service_locator.zpEjKxM', 'get_ServiceLocator_ZpEjKxMService', true],
            'App\\Controller\\Admin\\ArtisteController:listeArtistes' => ['privates', '.service_locator.bl5HTf8', 'get_ServiceLocator_Bl5HTf8Service', true],
            'App\\Controller\\Admin\\ArtisteController:suprArtiste' => ['privates', '.service_locator.g6U4b5U', 'get_ServiceLocator_G6U4b5UService', true],
            'App\\Controller\\Admin\\StyleController:ajoutModifStyle' => ['privates', '.service_locator.d4fyDVZ', 'get_ServiceLocator_D4fyDVZService', true],
            'App\\Controller\\Admin\\StyleController:listeStyles' => ['privates', '.service_locator.75N9Wt6', 'get_ServiceLocator_75N9Wt6Service', true],
            'App\\Controller\\Admin\\StyleController:suprStyle' => ['privates', '.service_locator.jsQYJf6', 'get_ServiceLocator_JsQYJf6Service', true],
            'App\\Controller\\AlbumController:ficheAlbum' => ['privates', '.service_locator.KpmPeGn', 'get_ServiceLocator_KpmPeGnService', true],
            'App\\Controller\\AlbumController:listeAlbums' => ['privates', '.service_locator.zIgE5An', 'get_ServiceLocator_ZIgE5AnService', true],
            'App\\Controller\\ArtisteController:ficheArtiste' => ['privates', '.service_locator.jvtX91I', 'get_ServiceLocator_JvtX91IService', true],
            'App\\Controller\\ArtisteController:listeArtistes' => ['privates', '.service_locator.bl5HTf8', 'get_ServiceLocator_Bl5HTf8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\ArtisteController::ajoutModifArtiste' => '?',
            'App\\Controller\\Admin\\ArtisteController::listeArtistes' => '?',
            'App\\Controller\\Admin\\ArtisteController::suprArtiste' => '?',
            'App\\Controller\\Admin\\StyleController::ajoutModifStyle' => '?',
            'App\\Controller\\Admin\\StyleController::listeStyles' => '?',
            'App\\Controller\\Admin\\StyleController::suprStyle' => '?',
            'App\\Controller\\AlbumController::ficheAlbum' => '?',
            'App\\Controller\\AlbumController::listeAlbums' => '?',
            'App\\Controller\\ArtisteController::ficheArtiste' => '?',
            'App\\Controller\\ArtisteController::listeArtistes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\ArtisteController:ajoutModifArtiste' => '?',
            'App\\Controller\\Admin\\ArtisteController:listeArtistes' => '?',
            'App\\Controller\\Admin\\ArtisteController:suprArtiste' => '?',
            'App\\Controller\\Admin\\StyleController:ajoutModifStyle' => '?',
            'App\\Controller\\Admin\\StyleController:listeStyles' => '?',
            'App\\Controller\\Admin\\StyleController:suprStyle' => '?',
            'App\\Controller\\AlbumController:ficheAlbum' => '?',
            'App\\Controller\\AlbumController:listeAlbums' => '?',
            'App\\Controller\\ArtisteController:ficheArtiste' => '?',
            'App\\Controller\\ArtisteController:listeArtistes' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
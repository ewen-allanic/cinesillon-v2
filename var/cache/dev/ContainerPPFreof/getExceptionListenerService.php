<?php

namespace ContainerPPFreof;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExceptionListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener(true, ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)), $a);
    }
}

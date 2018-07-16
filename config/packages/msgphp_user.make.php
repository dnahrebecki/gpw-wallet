<?php

// generated by `make:user`
// this configuration may be merged into your existing application configuration

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;

return function (ContainerConfigurator $container) {
    $container->extension('msgphp_user', array (
  'class_mapping' => 
  array (
    'MsgPhp\\User\\Entity\\Role' => 'App\\Entity\\User\\Role',
    'MsgPhp\\User\\Entity\\UserRole' => 'App\\Entity\\User\\UserRole',
  ),
));

    $container->services()
        ->defaults()
            ->private()
            ->autoconfigure()
            ->autowire()

        ->set(App\Security\UserRolesProvider::class)
        ->alias(MsgPhp\User\Infra\Security\UserRolesProviderInterface::class, App\Security\UserRolesProvider::class)

        ->alias('msgphp.messenger.event_bus', 'event_bus')

        ->set(App\Console\ClassContextElementFactory::class)
        ->alias(MsgPhp\Domain\Infra\Console\Context\ClassContextElementFactoryInterface::class, App\Console\ClassContextElementFactory::class)
    ;
};

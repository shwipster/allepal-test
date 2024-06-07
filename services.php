<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

return static function (ContainerBuilder $container): void {
    $container
        ->register('stringGenerator', 'Kristjan\Testtask\Services\StringGenerator')
        ->addArgument('%stringGenerator.length%');

    $container
        ->register('arrayGenerator', 'Kristjan\Testtask\Services\ArrayGenerator')
        ->addArgument(new Reference('stringGenerator'))
        ->addArgument('%arrayGenerator.length%');

    $container->register('app', 'Kristjan\Testtask\App')
        ->addArgument(new Reference('arrayGenerator'));


    $container->setParameter('stringGenerator.length', '10');
    $container->setParameter('arrayGenerator.length', '5');
};

<?php

declare(strict_types=1);

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

function getContainer()
{
    $container = new ContainerBuilder();
    $loader = new PhpFileLoader($container, new FileLocator(__DIR__));
    $loader->load('services.php');

    return $container;
}

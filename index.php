<?php

declare(strict_types=1);

require './vendor/autoload.php';
require 'bootstrap.php';

$container = getContainer();

$app = $container->get('app');
$encodedArray = $app->run();

echo "<pre>";
print_r($encodedArray);

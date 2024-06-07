<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testApp(): void
    {
        $container = getContainer();
        $app = $container->get('app');
        $array = $app->run();

        $this->assertIsString($array[0]);
    }
}

<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ArrayGeneratorTest extends TestCase
{
    public function testArrayLength(): void
    {
        $container = getContainer();
        $generatorArray = $container->get("arrayGenerator");
        $array = $generatorArray->generate();
        $this->assertSame(count($array), 5);

        $container = getContainer();
        $container->setParameter('arrayGenerator.length', '10');
        $generatorArray = $container->get("arrayGenerator");
        $array = $generatorArray->generate();
        $this->assertSame(count($array), 10);

        $container = getContainer();
        $container->setParameter('arrayGenerator.length', '-1');
        $generatorArray = $container->get("arrayGenerator");
        $array = $generatorArray->generate();
        $this->assertSame(count($array), 0);
    }

    public function testArrayContent(): void
    {
        $container = getContainer();
        $generatorArray = $container->get("arrayGenerator");
        $array = $generatorArray->generate();

        $this->assertIsString($array[0]);
    }
}

<?php

declare(strict_types=1);

use Kristjan\Testtask\Services\StringGenerator;
use PHPUnit\Framework\TestCase;

class StringGeneratorTest extends TestCase
{
    public function testStringLength(): void
    {
        $container = getContainer();
        $generator = $container->get("stringGenerator");
        $string = $generator->generate();
        $this->assertSame(strlen($string), 10);

        $container = getContainer();
        $container->setParameter('stringGenerator.length', '5');
        $generator = $container->get("stringGenerator");
        $string = $generator->generate();
        $this->assertSame(strlen($string), 5);

        $container = getContainer();
        $container->setParameter('stringGenerator.length', '-1');
        $generator = $container->get("stringGenerator");
        $string = $generator->generate();
        $this->assertSame(strlen($string), 0);
    }

    public function testCharacters(): void
    {
        $generator = new StringGenerator(10000);
        $string = $generator->generate();
        $found = preg_match('/[^a-z0-9]+/', $string);
        $this->assertSame($found, 0);
    }
}

<?php

namespace Kristjan\Testtask\Services;

use Kristjan\Testtask\Services\GeneratorInterface;

class ArrayGenerator implements GeneratorInterface
{
    public function __construct(private GeneratorInterface $generator, private int $length = 5)
    {
        $this->length = $this->length < 0 ? 0 : $this->length;
    }

    public function generate(): array
    {
        $itemsArray = [];

        for ($i = 0; $i < $this->length; $i++) {
            $item = $this->generator->generate();
            $itemsArray[] = $item;
        }

        return $itemsArray;
    }
}

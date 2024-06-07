<?php

namespace Kristjan\Testtask;

use Kristjan\Testtask\Services\ArrayGenerator;

class App
{
    public function __construct(
        private ArrayGenerator $arrayGenerator
    ) {
    }

    public function run(): array
    {
        $array = $this->arrayGenerator->generate();

        $encodedArray = [];
        foreach ($array as $item) {
            $encodedArray[] = str_rot13($item);
        }

        return $encodedArray;
    }
}

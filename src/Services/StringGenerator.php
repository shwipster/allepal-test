<?php

namespace Kristjan\Testtask\Services;

use Kristjan\Testtask\Services\GeneratorInterface;

class StringGenerator implements GeneratorInterface
{
    const LETTERS = "abcdefghijklmnopqrstuvwxyz";
    const NUMBERS = "0123456789";

    public function __construct(private int $length = 10)
    {
        $this->length = $this->length < 0 ? 0 : $this->length;
    }

    public function generate(): string
    {
        $combinedLetters = self::LETTERS . self::NUMBERS;
        $string = "";

        for ($i = 0; $i < $this->length; $i++) {
            $string .= $combinedLetters[rand(0, (strlen($combinedLetters) - 1))];
        }
        return $string;
    }
}

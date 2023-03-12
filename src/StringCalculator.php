<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    function add(String $numbers): int {
        if (empty($numbers)) {
            return 0;
        }

        $numbersWithoutCommas = explode(",", $numbers);
        $numbersWithoutNewLine = explode("\n", $numbersWithoutCommas);

        $suma = 0;
        foreach ($numbersWithoutNewLine as $number) {
            $suma += (int) $number;
        }
        return $suma;
    }
}
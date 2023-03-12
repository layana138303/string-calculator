<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function returns_0_for_empty_string() {
        $calculator = new StringCalculator();

        $sum = $calculator->add("");

        $this->assertEquals(0, $sum);
    }

    /**
     * @test
     */
    public function returns_value_for_1_number() {
        $calculator = new StringCalculator();

        $sum = $calculator->add("1");

        $this->assertEquals(1, $sum);
    }

    /**
     * @test
     */
    public function returns_value_for_2_number() {
        $calculator = new StringCalculator();

        $sum = $calculator->add("1,2");

        $this->assertEquals(3, $sum);
    }
}
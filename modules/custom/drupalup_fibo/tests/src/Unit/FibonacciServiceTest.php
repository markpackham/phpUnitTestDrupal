<?php

namespace Drupal\Tests\drupalup_fibo\Unit;

use Drupal\drupalup_fibo\FibonacciService;
use Drupal\Tests\UnitTestCase;

/**
 * You need to have PHP unit tests installed, do this in root
 * composer install
 * If you just want PHP unit then do this
 * composer require --dev phpunit/phpunit
 *
 * Test class for Fibonacci service
 * here's the Fibonacci Sequence
 * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597
 * The next number is found by adding up the two numbers before it.
 * https://www.mathsisfun.com/numbers/fibonacci-sequence.html
 * 
 * To test this you need to be in the "core" folder then do the following
 * ../vendor/bin/phpunit ../modules/custom/
 * 
 */
class FibonacciServiceTest extends UnitTestCase
{

    public function testSixthFibonacciNumber()
    {
        $fibonacciService = new FibonacciService();
        $fibonacciSequence = $fibonacciService->calcSomeFibos(6);
        // If test succeeds it should be 5
        $this->assertEquals(
            $fibonacciSequence[5],
            5
        );
    }

}

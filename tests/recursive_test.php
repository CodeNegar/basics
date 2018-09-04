<?php

class Recursive_test extends \PHPUnit\Framework\TestCase {

    public function test_factorial_recursive(){
        $cases = [
            0 => 1,
            1 => 1,
            2 => 2,
            3 => 6,
            8 => 40320,
            10 => 3628800,
        ];

        foreach ($cases as $input => $expected){
            $this->assertEquals(factorial_recursive($input), $expected, 'Wrong factorial answer for ' . $input . '.');
        }
    }
}
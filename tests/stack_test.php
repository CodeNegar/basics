<?php

class Stack_test extends \PHPUnit\Framework\TestCase
{

    public function test_validate_balanced_braces()
    {
        $cases = [
            '()'            => true,
            '(a*b+c)'       => true,
            '[a+(b*c)]'     => true,
            ')('            => false,
            '[](){}'        => true,
            '((())]'        => false,
            '({[]})'        => true,
            '{{[[(())]]}}'  => true
        ];

        foreach ($cases as $input => $expected) {
            $this->assertEquals(validate_balanced_braces($input), $expected, 'failed for ' . $input . ' as input.');
        }
    }
}
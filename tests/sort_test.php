<?php

class Sort_test extends \PHPUnit\Framework\TestCase {
    private $cases;

    public function setUp()
    {
        parent::setUp();
        $this->cases = [
            [
                'unsorted'  => [4,2,1,3,5],
                'sorted'    => [1,2,3,4,5],
                'err'       => 'Sorting integer failed'
            ],
            [
                'unsorted'  => [4,2,3,5,1,3,5],
                'sorted'    => [1,2,3,3,4,5,5],
                'err'       => 'Sorting integer with duplicate numbers failed'
            ],
            [
                'unsorted'  => [4,2,1,-6,3,0,5],
                'sorted'    => [-6,0,1,2,3,4,5],
                'err'       => 'Sorting integer with negative numbers failed'
            ],
            [
                'unsorted'  => [4,2,-3,5.2,1,3,5],
                'sorted'    => [-3,1,2,3,4,5,5.2],
                'err'       => 'Sorting float with negative numbers failed'
            ],
        ];
    }

    public function test_bubble_sort(){
        foreach ($this->cases as $case){
            $input = $case['unsorted'];
            $expected = $case['sorted'];
            $err = $case['err'];
            $result = bubble_sort($input);
            $this->assertEquals($expected, $result, $err);
        }
    }
}
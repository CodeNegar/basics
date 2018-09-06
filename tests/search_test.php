<?php

class Search_test extends \PHPUnit\Framework\TestCase {
    private $cases;

    public function setUp()
    {
        parent::setUp();
        $this->cases = [
            [
                'haystack'  => [4,2,1,3,5],
                'needle'    => 4,
                'key'       => 0,
                'err'       => 'Searching integer failed'
            ],
            [
                'haystack'  => ['hello', 'world', 'foo', 'bar'],
                'needle'    => 'foo',
                'key'       => 2,
                'err'       => 'Searching string failed'
            ],
            [
                'haystack'  => ['hello', 'world', 'foo', 'bar'],
                'needle'    => 'foobar',
                'key'       => -1,
                'err'       => 'Searching not found case failed'
            ],
        ];
    }

    public function test_sequence_search(){
        foreach ($this->cases as $case){
            $haystack = $case['haystack'];
            $needle = $case['needle'];
            $expected = $case['key'];
            $err = $case['err'];

            $result = sequence_search($haystack, $needle);
            $this->assertEquals($expected, $result, $err);
        }
    }

    public function test_binary_search(){
        foreach ($this->cases as $case){
            $haystack = $case['haystack'];
            // binary search needs sorted array
            sort($haystack);
            $needle = $case['needle'];
            // find needle is sorted array
            $expected = array_search($needle, $haystack);
            if($expected === false) {
                $expected = -1;
            }

            $err = $case['err'];

            $result = binary_search($haystack, $needle);
            $this->assertEquals($expected, $result, $err);
        }
    }
}
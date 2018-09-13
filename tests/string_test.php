<?php

class String_test extends \PHPUnit\Framework\TestCase {
    private $cases;

    public function setUp()
    {
        parent::setUp();
        $this->cases = [
            [
                'haystack'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt',
                'needle'    => 'sit',
                'key'       => 18,
                'err'       => 'Searching word failed'
            ],
            [
                'haystack'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt',
                'needle'    => 'hello',
                'key'       => -1,
                'err'       => 'Searching non existing failed'
            ],
        ];
    }

    public function test_pattern_matching_naive(){
        foreach ($this->cases as $case){
            $haystack = $case['haystack'];
            $needle = $case['needle'];
            $expected = $case['key'];
            $err = $case['err'];

            $result = pattern_matching_naive($haystack, $needle);
            $this->assertEquals($expected, $result, $err);
        }
    }
}
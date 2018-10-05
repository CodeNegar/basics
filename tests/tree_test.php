<?php

class Tree_test extends \PHPUnit\Framework\TestCase
{

    public function test_preorder()
    {
        $tree = new Binary_tree();

        $tree->insert(5);
        $tree->insert(9);
        $tree->insert(3);
        $tree->insert(4);
        $tree->insert(2);
        $tree->insert(9);
        $tree->insert(2);
        $tree->insert(8);
        $tree->insert(1);

        $expected = "5321498";
        $this->expectOutputString($expected);

        $traverse = $tree->preorder();
    }

    public function test_inorder()
    {
        $tree = new Binary_tree();

        $tree->insert(5);
        $tree->insert(9);
        $tree->insert(3);
        $tree->insert(4);
        $tree->insert(2);
        $tree->insert(9);
        $tree->insert(2);
        $tree->insert(8);
        $tree->insert(1);

        $expected = "1234589";
        $this->expectOutputString($expected);

        $traverse = $tree->inorder();
    }

    public function test_postorder()
    {
        $tree = new Binary_tree();

        $tree->insert(5);
        $tree->insert(9);
        $tree->insert(3);
        $tree->insert(4);
        $tree->insert(2);
        $tree->insert(9);
        $tree->insert(2);
        $tree->insert(8);
        $tree->insert(1);

        $expected = "1243895";
        $this->expectOutputString($expected);

        $traverse = $tree->postorder();
    }
}
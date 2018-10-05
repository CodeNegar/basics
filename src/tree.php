<?php

// Read more at: https://www.sitepoint.com/data-structures-2/
class Binary_node
{
    public $value;
    public $left;
    public $right;

    public function __construct($node_value)
    {
        $this->value = $node_value;
        $this->left = null;
        $this->right = null;
    }

    public function preorder()
    {
        echo $this->value;

        if ($this->left !== null) {
            $this->left->preorder();
        }

        if ($this->right !== null) {
            $this->right->preorder();
        }
    }

    public function inorder()
    {
        if ($this->left !== null) {
            $this->left->inorder();
        }

        echo $this->value;

        if ($this->right !== null) {
            $this->right->inorder();
        }
    }

    public function postorder()
    {
        if ($this->left !== null) {
            $this->left->postorder();
        }

        if ($this->right !== null) {
            $this->right->postorder();
        }

        echo $this->value;
    }
}

class Binary_tree
{
    protected $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root === null;
    }

    public function insert($node_value)
    {
        $node = new Binary_node($node_value);
        if ($this->isEmpty()) {
            // if tree is empty this is root
            $this->root = $node;
            return;
        }

        $this->insertNode($node, $this->root);
    }

    protected function insertNode($node, &$tree)
    {
        if ($tree === null) {
            // insert node here if tree is empty
            $tree = $node;
        } else {
            if ($node->value > $tree->value) {
                // keep trying to insert right
                $this->insertNode($node, $tree->right);
            } else if ($node->value < $tree->value) {
                // keep trying to insert left
                $this->insertNode($node, $tree->left);
            } else {
                // reject duplicates
            }
        }
    }

    public function preorder()
    {
        $this->root->preorder();
    }

    public function inorder()
    {
        $this->root->inorder();
    }

    public function postorder()
    {
        $this->root->postorder();
    }
}
<?php

// Definition for a binary tree node.
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{
    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    public function inorderTraversal($root)
    {
        $result = [];
        $stack = [];
        $current = $root;

        while ($current || (!empty($stack))) {
            while ($current) {
                array_push($stack, $current);
                $current = $current->left;
            }

            $current = array_pop($stack);
            $result[] = $current->val;
            $current = $current->right;
        }
        return $result;
    }
}

$root = new TreeNode(1);

$root->right = new TreeNode(2);

$root->right->right = new TreeNode(3);


$solution = new Solution();

$result = $solution->inorderTraversal($root);

print_r($result);


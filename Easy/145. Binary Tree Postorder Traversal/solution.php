<?php

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
    public function postorderTraversal($root)
    {
        if ($root === null) {
            return [];
        }

        $stack = [$root];
        $result = [];

        while (!empty($stack)) {
            $node = array_pop($stack);

            array_push($result, $node->val);

            if ($node->left) {
                array_push($stack, $node->left);
            }

            if ($node->right) {
                array_push($stack, $node->right);
            }
        }

        return array_reverse($result);
    }
}

$solution = new Solution();

$root = new TreeNode(1);

$root->right = new TreeNode(2);

$root->right->right = new TreeNode(3);

$result = $solution->postorderTraversal($root);

print_r($result);

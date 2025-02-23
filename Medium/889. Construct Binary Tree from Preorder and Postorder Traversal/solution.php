<?php
class TreeNode
{
    public $val   = null;
    public $left  = null;
    public $right = null;

    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val   = $val;
        $this->left  = $left;
        $this->right = $right;
    }
}
class Solution
{
    public function constructFromPrePost($preorder, $postorder)
    {
        if (empty($preorder) || empty($postorder)) {
            return null;
        }

        $root = new TreeNode(array_shift($preorder));

        if (empty($preorder)) {
            return $root;
        }

        $leftSubRoot = $preorder[0];
        $leftSize    = array_search($leftSubRoot, $postorder);

        $leftPreorder  = array_slice($preorder, 0, $leftSize + 1);
        $rightPreorder = array_slice($preorder, $leftSize + 1);

        $leftPostorder  = array_slice($postorder, 0, $leftSize + 1);
        $rightPostorder = array_slice($postorder, $leftSize + 1, -1);

        $root->left  = $this->constructFromPrePost($leftPreorder, $leftPostorder);
        $root->right = $this->constructFromPrePost($rightPreorder, $rightPostorder);

        return $root;
    }
}

$solution = new Solution();

$root = $solution->constructFromPrePost([1, 2, 4, 3, 5], [4, 2, 5, 3, 1]);

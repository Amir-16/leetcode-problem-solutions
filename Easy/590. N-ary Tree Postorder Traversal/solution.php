<?php
class Node
{
    public $val = null;
    public $children = null;
    public function __construct($val = 0)
    {
        $this->val = $val;
        $this->children = array();
    }
}

class Solution
{
    /**
     * @param Node $root
     * @return integer[]
     */
    public function postorder($root)
    {
        $result = [];
        if ($root === null) {
            return $result;
        }

        $this->checkStraightLine($root, $result);

        return $result;
    }

    private function checkStraightLine($node, &$result)
    {
        if ($node->children) {
            foreach ($node->children as $child) {
                $this->checkStraightLine($child, $result);
            }
        }
        array_push($result,$node->val);
    }
}

// Example usage:

// Creating the tree:
//        1
//      / | \
//     3  2  4
//    / \
//   5   6

$node5 = new Node(5);
$node6 = new Node(6);
$node3 = new Node(3, [$node5, $node6]);
$node2 = new Node(2);
$node4 = new Node(4);
$root = new Node(1, [$node3, $node2, $node4]);

$solution = new Solution();
$result = $solution->postorder($root);

print_r($result);  // Output: [5, 6, 3, 2, 4, 1]
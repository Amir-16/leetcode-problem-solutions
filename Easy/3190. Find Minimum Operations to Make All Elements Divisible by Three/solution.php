<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function minimumOperations($nums)
    {                  
        $n = count($nums);
        $remCount = array(0, 0, 0);
    

        foreach ($nums as $num) {
            $remCount[$num % 3]++;
        }
    
        $minOps = 0;
    

        if ($remCount[1] > 0) {
            $minOps += $remCount[1];
        }

        if ($remCount[2] > 0) {
            $minOps += $remCount[2];
        }
    
        return $minOps;
    }                                        

}

$solution = new Solution();

$nums = [1, 2, 5, 6, 3, 4];

echo $solution->minimumOperations($nums); // Output: 3

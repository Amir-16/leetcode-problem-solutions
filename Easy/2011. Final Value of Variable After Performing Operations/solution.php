<?php
class Solution
{
    /**
     * @param String[] $operations
     * @return Integer
     */
    public function finalValueAfterOperations($operations)
    { 
        $result = 0;
        foreach ($operations as $operation) {
            if($operation == '++X' || $operation == 'X++'){
                $result++;
            } else{
                $result--;
            }
        }
        return $result;
    }
}

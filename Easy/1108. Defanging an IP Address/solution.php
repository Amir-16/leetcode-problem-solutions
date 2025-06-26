<?php
class Solution
{
    /**
     * @param String $address
     * @return String
     */
    public function defangIPaddr($address)
    {
        return str_replace('.','[.]',$address);
    }
}

$solution = new Solution();

$address = "1.1.1.1";

$defangedAddress = $solution->defangIPaddr($address);

echo $defangedAddress;

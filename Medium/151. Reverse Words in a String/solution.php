<?php
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    public function reverseWords($s)
    {
        $words = preg_split('/\s+/',trim($s));

        $reverseWords =array_reverse($words);

        return implode(" ", $reverseWords);

    }
}

$solution = new Solution();

$result = $solution->reverseWords("a good   example");

print_r($result);



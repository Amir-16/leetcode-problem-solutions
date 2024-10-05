<?php
class Solution
{
    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    public function checkInclusion($s1, $s2)
    {
        $len1 = strlen($s1);
        $len2 = strlen($s2);

        if ($len1 > $len2) {
            return false;
        }

        $s1Freq = array_fill(0, 26, 0);

        $s2Freq = array_fill(0, 26, 0);

        for ($i = 0; $i < $len1; $i++) {
            $s1Freq[ord($s1[$i]) - ord('a')]++;
            $s2Freq[ord($s2[$i]) - ord('a')]++;

        }

        if ($s1Freq == $s2Freq) {
            return true;
        }

        for ($i = $len1; $i < $len2; $i++) {
            $s2Freq[ord($s2[$i]) - ord('a')]++;
            $s2Freq[ord($s2[$i - $len1]) - ord('a')]--;

            if ($s1Freq == $s2Freq) {
                return true;
            }
        }

        return false;
    }
}

$s1 = "ab";
$s2 = "eidbaooo";

$solution = new Solution();
$result = $solution->checkInclusion($s1, $s2);

echo $result; // Output: true

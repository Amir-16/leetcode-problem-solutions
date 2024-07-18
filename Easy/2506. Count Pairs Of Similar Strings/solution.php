<?php
class Solution
{
    public function similarPairs($words)
    {
        $count = [];

        foreach ($words as $word) {
            $charSet = $this->charsetToString($word);

            if (isset($count[$charSet])) {
                $count[$charSet]++;
            } else {
                $count[$charSet] = 1;
            }
        }

        //Count pairs
        $result = 0;

        foreach ($count as $key => $n) {
            if ($n > 1) {
                $result += ($n * ($n - 1)) / 2;
            }
        }

        return $result;
    }

    private function charsetToString($word)
    {
        $chars = str_split($word);

        sort($chars);

        return implode("", array_unique($chars));
    }

}

$solution = new Solution();

$words = ["aba", "aabb", "abcd", "bac", "aabc"];

$result = $solution->similarPairs($words);

print_r($result);

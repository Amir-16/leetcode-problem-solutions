<?php
class Solution
{
    /**
     * @param String $sentence1
     * @param String $sentence2
     * @return Boolean
     */
    public function areSentencesSimilar($sentence1, $sentence2)
    {
        $sentence1Words = explode(" ", $sentence1);

        $sentence2Words = explode(" ", $sentence2);

        $i = 0;
        $j = 0;

        $lengtht1 = count($sentence1Words);

        $lengtht2 = count($sentence2Words);

        while ($i < $lengtht1 && $i < $lengtht2 && $sentence1Words[$i] === $sentence2Words[$i]) {
            $i++;
        }

        while ($j < $lengtht1 - $i && $j < $lengtht2 - $i && $sentence1Words[$lengtht1 - 1 - $j] === $sentence2Words[$lengtht2 - 1 - $j]) {
            $j++;
        }

        return $i + $j >= min($lengtht1, $lengtht2);
    }
}

// Example usage:

$solution = new Solution();

$sentence1 = "My name is John";
$sentence2 = "My name is Johnny";

echo $solution->areSentencesSimilar($sentence1, $sentence2); // Output: true

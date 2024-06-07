<?php
class Solution
{

    /**
     * @param String[] $words
     * @return Integer
     */
    public function uniqueMorseRepresentations($words)
    {

        $morse = [
            'a' => '.-',
            'b' => '-...',
            'c' => '-.-.',
            'd' => '-..',
            'e' => '.',
            'f' => '..-.',
            'g' => '--.',
            'h' => '....',
            'i' => '..',
            'j' => '.---',
            'k' => '-.-',
            'l' => '.-..',
            'm' => '--',
            'n' => '-.',
            'o' => '---',
            'p' => '.--.',
            'q' => '--.-',
            'r' => '.-.',
            's' => '...',
            't' => '-',
            'u' => '..-',
            'v' => '...-',
            'w' => '.--',
            'x' => '-..-',
            'y' => '-.--',
            'z' => '--..',
        ];

        if (count($words) <= 1) {
            return 1;
        }
        foreach ($words as $word) {
            $morseWord = '';
            for ($i = 0; $i < strlen($word); $i++) {
                $morseWord .= $morse[$word[$i]];
            }
            $morseWords[] = $morseWord;
        }

        $uniqurArray = array_unique($morseWords);

        return count($uniqurArray);

    }
}

$solution = new Solution();

$result = $solution->uniqueMorseRepresentations(["gin", "zen", "gig", "msg"]);

print_r($result);

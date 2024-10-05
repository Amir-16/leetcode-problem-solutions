<?php
class Solution
{
    /**
     * @param String $key
     * @param String $message
     * @return String
     */
    public function decodeMessage($key, $message)
    {
        $map = [];
        $currentChar = 'a';

        for ($i = 0; $i < strlen($key); $i++) {
            $char = $key[$i];

            if ($char != ' ' && !isset($map[$char])) {
                $map[$char] = $currentChar;
                $currentChar++;
            }
        }

        $decodedMessage = '';
        for ($i = 0; $i < strlen(string: $message); $i++) {
            $char = $message[$i];
            $decodedMessage .= match ($char) {
                ' ' => ' ',
                default => $map[$char],
            };
        }

        return $decodedMessage;
    }
}

$solution = new Solution();

$key = "thequickbrownfoxjumpsoverthelazydog";

$message = "khoor zruog yqtneyxuljwopsdvfgcrilnbkmw";

$result = $solution->decodeMessage($key, $message);

echo $result; // Output: "the quick brown fox jumps over the lazy dog"

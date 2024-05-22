<?php
class Solution
{
    /**
     * @param String[] $emails
     * @return Integer
     */
    public function numUniqueEmails($emails)
    {

        $count = 0;

        $uniqueEmails = [];

        foreach ($emails as $email) {
            list($local, $domain) = explode('@', $email);

            if (strpos($local, '+') !== false) {
                $local = substr($local, 0, strpos($local, '+'));
            }

            $local = str_replace('.', '', $local);

            $normalEmail = $local . '@' . $domain;

            $uniqueEmails[$normalEmail] = true;

        }

        return count($uniqueEmails);
    }
}

$solution = new Solution();

$result = $solution->numUniqueEmails(["test.email+alex@leetcode.com", "test.e.mail+bob.cathy@leetcode.com", "testemail+david@lee.tcode.com"]);

echo $result;

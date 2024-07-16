<?php
class Solution
{
    /**
     * @param String[] $details
     * @return Integer
     */
    public function countSeniors($details)
    {
        $countSeniors = 0;

        foreach ($details as $detail) {

            $age = (int) substr($detail, 11, 2);

            if ($age > 60) {
                $countSeniors++;
            }
        }

        return $countSeniors;
    }
}

$solution = new Solution();

//3$details = ["7868190130M7522", "5303914400F9211", "9273338290F4010"];

$details = ["9751302862F0693","3888560693F7262","5485983835F0649","2580974299F6042","9976672161M6561","0234451011F8013","4294552179O6482"];

$result = $solution->countSeniors($details);

print_r($result);

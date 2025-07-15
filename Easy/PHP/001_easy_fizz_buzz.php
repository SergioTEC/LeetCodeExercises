<!-- Link: https://leetcode.com/problems/fizz-buzz/description/ -->

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $result = [];
        for ($i = 1; $i <= $n; $i++) {
            $answer = "";
            if ($i % 3 == 0) {
                $answer .= "Fizz";
            }

            if ($i % 5 == 0) {
                $answer .= "Buzz";
            }

            $answer = $answer ?: (string) $i;

            $result[] = $answer;
        }

        return $result;
    }
}
<!-- Link: https://leetcode.com/problems/palindrome-number/description/ -->

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {

        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }

        $original = $x;
        $inverted = 0;

        while ($original > $inverted) {
            $last_digit = $original % 10;
            $inverted = $inverted * 10;
            $inverted += $last_digit;

            $original = (int) ($original / 10);
        }

        if ($original == $inverted || $original == (int) ($inverted / 10)) {
            return true;
        } else {
            return false;
        }
    }
}
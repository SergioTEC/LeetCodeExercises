<!-- Link: https://leetcode.com/problems/two-sum/description/ -->

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $seen = [];
        foreach($nums as $index => $num){
            $complement = $target - $num;
            if (isset($seen[$complement])) {
                return [$seen[$complement], $index];
            }

            $seen[$num] = $index;
        }
    }
}
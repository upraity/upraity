class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $nums = array_unique($nums);
        rsort($nums);
        $n = count($nums);
        return $n>=3 ? $nums[2] : $nums[0];
    }
}

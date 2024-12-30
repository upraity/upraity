class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $length = count($nums);
        $sum = array_sum($nums);
        $s = ($length * ($length + 1)) / 2;
        return $s - $sum;
    }
}

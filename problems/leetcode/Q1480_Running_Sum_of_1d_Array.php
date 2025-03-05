class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $result = [];
        $sum = 0;
        foreach($nums as $num){
            $sum += $num;
            $result[] = $sum;
        }
    return $result;
    }
}

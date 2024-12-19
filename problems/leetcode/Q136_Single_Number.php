class Solution {
    /**
     * @param Integer[]
     * @return Integer
     **/
    function singleNumber($nums) {
        $result = 0;
        foreach ($nums as $num) {
            $result ^= $num; 
        }
        return $result;
    }
}

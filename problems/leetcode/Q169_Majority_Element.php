class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $a = array_count_values($nums);
        print_r($a);
        $max = max($a);
        foreach($a as $k => $key){
            if($key == $max){
                return $k;
            }
        }
    }
}

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $s = array_count_values($nums);
        foreach($s as $k => $v){
            if($v>1)
                return $k;
        }
    }
}

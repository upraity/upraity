class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function divideArray($nums) {
        $count = array_count_values($nums);
        foreach($count as $c){
            if($c % 2 != 0) return false;
        }
        return true;
    }
}

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumCount($nums) {
        if(count(array_unique($nums))==1 && $nums[0] === 0) return 0;
        foreach($nums as $n){
            if($n < 0) $c++;
            if($n > 0) $cc++;
        }
        return max($c, $cc);
    }
}

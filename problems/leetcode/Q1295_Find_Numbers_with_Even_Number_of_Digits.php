class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $count = 0;
        foreach($nums as $n){
            if(strlen($n)% 2 == 0) $count++;
        }
        return $count;
    }
}

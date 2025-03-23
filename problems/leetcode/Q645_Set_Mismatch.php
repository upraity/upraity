class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findErrorNums($nums) {
        $n = count($nums);      
        $s = array_sum($nums);
        $s2 = array_sum(array_unique($nums)); 
        $ex = ($n * ($n + 1)) / 2;  
        $m = $ex - $s2; 
        $d = $s - $s2;       
        return [$d, $m];
    }
}

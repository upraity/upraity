class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $j = 0;
        for($i = 0; $i < count($nums); $i++) {
            if($nums[$i] != 0) {
                $nums[$j] = $nums[$i];
                $j++;
            }
        }
        while($j < count($nums)) {
            $nums[$j] = 0;
            $j++;
        }
    }
}

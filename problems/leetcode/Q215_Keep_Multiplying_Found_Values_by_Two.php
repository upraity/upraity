class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $original
     * @return Integer
     */
    function findFinalValue($nums, $original) {
        while (in_array($original, $nums)) {
            $original *= 2; 
        }
        return $original; 
    }
}

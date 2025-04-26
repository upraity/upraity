class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        if(!in_array($target, $nums)) return [-1,-1];
        $indexes = array_keys($nums, $target);
        return [min($indexes), max($indexes)];
    }
}

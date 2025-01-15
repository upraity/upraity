class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfUnique($nums) {
        $c = array_count_values($nums);
        $u = 0;
        foreach ($c as $key => $v) {
            if ($v === 1) {
                $u+= $key;
            }
        }
        return $u;
    }
}

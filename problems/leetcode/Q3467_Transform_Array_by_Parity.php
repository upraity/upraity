class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function transformArray($nums) {
        foreach ($nums as $num)
            $n[] = ($num % 2 == 0) ? 0 : 1;
        sort($n);
        return $n;
    }
}

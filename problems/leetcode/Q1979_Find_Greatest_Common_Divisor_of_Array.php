class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findGCD($nums) {
        $min = min($nums);
        $max = max($nums);
        return $this->gcd($min, $max);
    }

    function gcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }
}

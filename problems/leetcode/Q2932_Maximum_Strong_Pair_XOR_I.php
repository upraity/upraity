class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumStrongPairXor($nums) {
        $maxXor = [];
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i; $j < count($nums); $j++) {
                if (abs($nums[$i] - $nums[$j]) <= min($nums[$i], $nums[$j])) 
                    $xorValue[] = $nums[$i] ^ $nums[$j];
            }
        }
        return max($xorValue);
    }
}

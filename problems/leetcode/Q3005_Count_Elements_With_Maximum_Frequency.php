class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxFrequencyElements($nums) {
        $freq = array_count_values($nums); 
        $max_freq = max($freq);
        $count = 0;

        foreach ($freq as $num => $f) {
            if ($f == $max_freq) {
                $count += $f; 
            }
        }
        return $count;
    }
}

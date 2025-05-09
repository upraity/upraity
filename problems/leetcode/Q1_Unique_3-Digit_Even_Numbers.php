class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer
     */
    function totalNumbers($digits) {
        $count = array_count_values($digits); 
        $unique = [];

        foreach ($digits as $a) {
            if ($a == 0) continue; 

            foreach ($digits as $b) {
                foreach ($digits as $c) {
                    if ($c % 2 != 0) continue; 
                    if (($a == $b && $count[$a] < 2) || 
                        ($b == $c && $count[$b] < 2) || 
                        ($c == $a && $count[$c] < 2) || 
                        ($a == $b && $b == $c && $count[$a] < 3)) {
                        continue;
                    }
                    $unique[$a.$b.$c] = true;
                }
            }
        }
        return count($unique);
    }
}

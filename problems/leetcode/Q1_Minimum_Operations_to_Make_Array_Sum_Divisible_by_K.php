class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minOperations($nums, $k) {
        $sum = array_sum($nums);
        $rem = $sum % $k;
    
        if ($rem == 0) return 0;
        rsort($nums);
        $operations = 0;
        foreach ($nums as $num) {
            $reduce = min($num, $rem);
            $operations += $reduce;
            $rem -= $reduce;
    
            if ($rem == 0) break;
        }
        return $operations;
    }
}

class Solution {

    /**
     * @param Integer $n
     * @param Integer $m
     * @return Integer
     */
    function differenceOfSums($n, $m) {
        for($i=1;$i<=$n;$i++){
            if($i%$m==0)
                $sum1+=$i;
            else
                $sum2+=$i;
        }
        return $sum2-$sum1;
    }
}

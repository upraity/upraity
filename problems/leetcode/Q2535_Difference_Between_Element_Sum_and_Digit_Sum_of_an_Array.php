class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function differenceOfSum($nums) {
        foreach($nums as $n){
            $s+=$n;
            $t=$n;
            while($t>0){
                $r=$t%10;
                $s1+=$r;
                $t=intval($t / 10);
            }
        }
        return $s-$s1;
    }
}

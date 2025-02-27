class Solution {

    /**
     * @param Integer $n
     * @param Integer $start
     * @return Integer
     */
    function xorOperation($n, $start) {
        $nums = [];
        for($i=0;$i<$n;$i++){
            $nums[] = $start + 2 * $i;
        }
        $result=0;
        foreach($nums as $a){
            $result ^= $a;
        }
        return $result;
    }
}

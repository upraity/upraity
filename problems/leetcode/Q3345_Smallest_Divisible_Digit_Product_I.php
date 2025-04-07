class Solution {

    /**
     * @param Integer $n
     * @param Integer $t
     * @return Integer
     */
    function smallestNumber($n, $t) {
       while(1){
            $a = $n;
            $s=1;
            while($a>0){
                $r = $a%10;
                $s *= $r;
                $a = intval($a/10);
            }
            if($s%$t==0){
                return $n;
                break;
            }
            $n++;
        }
    }
}

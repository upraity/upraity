class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numberOfMatches($n) {
        // return $n-1;
        $s=0;
        while($n>1){
            if($n%2==0){
                $r=intval($n/2);
                $n=intval($n/2);
            }
            else{
                $r=intval($n-1)/2;
                $n=intval($n/2)+1;
            }
            $s+=$r;
        }
        return $s;
    }
}

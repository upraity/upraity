class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function truncateSentence($s, $k) {
        $arr = explode(' ',$s);
        for($i=0;$i<$k;$i++){
            $a .=  $arr[$i]." ";
        }
        return trim($a);
    }
}

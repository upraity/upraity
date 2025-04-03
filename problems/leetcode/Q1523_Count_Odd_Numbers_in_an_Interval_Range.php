class Solution {

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countOdds($low, $high) {
        $h = intval(($high + 1)/2) ;
        $l = intval($low/2);
        
        return $h - $l;
    }
}

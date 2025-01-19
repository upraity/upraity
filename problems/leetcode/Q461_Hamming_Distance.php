class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y) {
        $xor = $x ^ $y;
        $b = decbin($xor);
    
        $d = substr_count($b, '1');
        return $d;
    }
}

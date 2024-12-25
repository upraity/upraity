class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function getLucky($s, $k) {
        $arr = array_combine(range('a', 'z'), range(1, 26));
        foreach (str_split($s) as $c) {
            $t .= $arr[$c];
        }
        for ($i = 0; $i < $k; $i++) {
            $t = array_sum(str_split($t)); 
        }
        return $t;
    }
}

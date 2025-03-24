class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function areNumbersAscending($s) {
        preg_match_all('/\d+/', $s, $m);
        $n = $m[0];
        for ($i = 0; $i < count($n) - 1; $i++) {
            if ($n[$i] >= $n[$i + 1]) {
                return false;  
                exit;          
            }
        }
        return true;
    }
}

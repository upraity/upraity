class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $t = trim($s);
        $ex = explode(' ',$t);
        $l = end($ex);
        return strlen($l);
    }
}

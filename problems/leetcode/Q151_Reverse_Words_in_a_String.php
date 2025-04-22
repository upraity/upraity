class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $arr = preg_split('/\s+/', trim($s));
        $arr = array_reverse($arr);
        return implode(" ", $arr);
    }
}

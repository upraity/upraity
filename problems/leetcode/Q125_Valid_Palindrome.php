class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace("/[^a-zA-Z0-9]/", "", $s);
        $s = strtolower($s);
        $rev = strrev($s);
        if($rev == $s) return true;
        else return false;
    }
}

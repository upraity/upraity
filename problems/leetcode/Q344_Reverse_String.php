class Solution {
    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $s = array_reverse($s);
        return $s;
    }
}

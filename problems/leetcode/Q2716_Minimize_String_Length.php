class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minimizedStringLength($s) {
        return count(array_unique(str_split($s)));
    }
}

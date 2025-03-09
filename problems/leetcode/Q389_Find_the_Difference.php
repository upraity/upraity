class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        return chr(array_sum(array_map('ord', str_split($t))) - array_sum(array_map('ord', str_split($s))));
    }
}

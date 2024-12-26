class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function areOccurrencesEqual($s) {
        /*$arr = str_split($s);
        $array = array_count_values($arr);
        $values = array_values($array);
        $unique = array_unique($values);
        if (count($unique) === 1) return true;
        else return false;*/
        return count(array_unique(array_values(array_count_values(str_split($s))))) === 1 ? true : false;
    }
}

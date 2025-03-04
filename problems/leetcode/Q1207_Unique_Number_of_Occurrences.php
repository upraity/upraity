class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $a = array_count_values($arr);
        $b = array_count_values($a);
        foreach($b as $c){
            if($c > 1)
                return false;
        }
        return true;
    }
}

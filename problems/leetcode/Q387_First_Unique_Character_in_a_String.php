class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $arr = str_split($s);
        $count = array_count_values($arr);
        foreach($arr as $c => $key){
            if($count[$key] == 1){
                return $c;
                exit();
            }
        }
        return -1;
    }
}

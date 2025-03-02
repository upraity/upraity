class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $a = str_split($s);
        foreach($a as $arr => $key){
            $result[$indices[$arr]] = $key;
        }
        for($i=0;$i<count($indices);$i++){
            $r[] = $result[$i];
        }
        return implode('',$r);
    }
}

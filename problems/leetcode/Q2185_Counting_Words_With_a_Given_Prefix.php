class Solution {

    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    function prefixCount($words, $pref) {
        $c=0;
        for($i=0;$i<count($words);$i++){
            if(substr($words[$i], 0, strlen($pref)) == $pref){
                $c++;
            }
        }
        return $c;
    }
}

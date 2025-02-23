class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $w1 = str_split($word1);
        $w2 = str_split($word2);
        $max = max(count($w1), count($w2));
        for($i=0;$i<$max;$i++){
            $result[]= $w1[$i].$w2[$i];
        }
        return implode('',$result);
    }
}

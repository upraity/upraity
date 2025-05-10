class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        foreach($sentences as $st => $k){
            $a[] = count(explode(' ',$k));
        }
        return max($a);
    }
}

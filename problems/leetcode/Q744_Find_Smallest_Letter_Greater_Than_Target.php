class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target) {
        foreach($letters as $l){
            if($l > $target)    return $l;
        }
        return $letters[0];
    }
}

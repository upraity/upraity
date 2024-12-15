class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        if(ctype_upper($word))
            return true;
        elseif(ucfirst(strtolower($word)) == $word)
            return true;
        elseif(ctype_lower($word))
            return true;
        else
            return false;
    }
}

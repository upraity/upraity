class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function isValid($word) {
         return (count(str_split($word))>=3 && preg_match("/^[0-9a-zA-Z]+$/", $word) && preg_match('/[aeiouAEIOU]/', $word) && preg_match('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $word))? true : false;
    }
}

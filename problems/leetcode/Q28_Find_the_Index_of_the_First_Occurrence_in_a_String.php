class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $index = strpos($haystack, $needle);
        if($index !== false) return $index;
        else return -1;
    }
}

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        return substr_count(decbin($n), '1');
    }
}

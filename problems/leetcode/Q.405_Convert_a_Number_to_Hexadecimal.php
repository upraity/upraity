class Solution {
    /**
     * @param Integer $num
     * @return String
     */
    function toHex($num) {
        // Handle two's complement for negative numbers
        $num = $num & 0xFFFFFFFF;
        return dechex($num);
    }
}

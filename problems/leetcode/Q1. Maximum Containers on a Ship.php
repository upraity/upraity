class Solution {

    /**
     * @param Integer $n
     * @param Integer $w
     * @param Integer $maxWeight
     * @return Integer
     */
    function maxContainers($n, $w, $maxWeight) {
        $total = $n * $n;
        $maxW = Intval($maxWeight / $w);
        return min($total, $maxW);
    }
}

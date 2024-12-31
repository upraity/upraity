class Solution {

    /**
     * @param String $date
     * @return Integer
     */
    function dayOfYear($date) {
        return date("z", strtotime($date)) + 1;
    }
}

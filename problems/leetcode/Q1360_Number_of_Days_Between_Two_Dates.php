class Solution {

    /**
     * @param String $date1
     * @param String $date2
     * @return Integer
     */
    function daysBetweenDates($date1, $date2) {
        return (new DateTime($date1))->diff(new DateTime($date2))->days;
    }
}

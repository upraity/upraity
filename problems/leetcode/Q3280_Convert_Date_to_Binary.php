class Solution {

    /**
     * @param String $date
     * @return String
     */
    function convertDateToBinary($date) {
        list($year, $month, $day) = explode("-", $date);

        $binaryYear = decbin((int)$year);
        $binaryMonth = decbin((int)$month);
        $binaryDay = decbin((int)$day);

        return  "$binaryYear-$binaryMonth-$binaryDay";
    }
}

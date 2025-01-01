class Solution {

    /**
     * @param String $date
     * @return String
     */
    function reformatDate($date) {
        $cleaned_date = str_replace(["th", "st", "nd", "rd"], "", $date);
        $date_object = DateTime::createFromFormat("j M Y", $cleaned_date);
        return $date_object->format("Y-m-d");
    }
}

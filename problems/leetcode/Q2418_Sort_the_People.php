class Solution {

    /**
     * @param String[] $names
     * @param Integer[] $heights
     * @return String[]
     */
    function sortPeople($names, $heights) {
        $combined = array_combine($heights, $names);
        krsort($combined);
        $result = array_values($combined);
        return $result;
    }
}

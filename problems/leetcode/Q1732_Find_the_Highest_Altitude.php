class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $altitude = 0;
        $maxAlt = 0;

        foreach ($gain as $g) {
            $altitude += $g;
            $maxAlt = max($maxAlt, $altitude);
        }

        return $maxAlt;
    }
}

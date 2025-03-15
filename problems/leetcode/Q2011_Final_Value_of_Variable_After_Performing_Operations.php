class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $x = 0;
        foreach ($operations as $operation) {
            if ($operation == "--X" || $operation == "X--") {
                $x--;
            } elseif ($operation == "++X" || $operation == "X++") {
                $x++;
            }
        }
        return $x;
    }
}

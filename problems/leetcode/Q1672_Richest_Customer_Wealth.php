class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        foreach($accounts as $acc => $key){
            $a[]=array_sum($key);
        }
        return max($a);
    }
}

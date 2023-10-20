class Solution {
    function divide($dividend, $divisor) {
        if(intval($dividend/$divisor) > 2**31-1){
            return intval(($dividend/$divisor)-1);
        }
        return intval($dividend/$divisor);
    }
}

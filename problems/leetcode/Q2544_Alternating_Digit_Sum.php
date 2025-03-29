class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function alternateDigitSum($n) {
        $arr = str_split($n);
        foreach($arr as $a => $key){
            if($a % 2 != 0){
                $arr[$a] *= (-1);
            }
        }
        return array_sum($arr);
    }
}

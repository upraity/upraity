class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function countDigits($num) {
        $n = str_split($num);
        $c=0;
        for($i=0;$i<count($n);$i++){
            if($num % $n[$i] == 0)
                $c++;
        }
        return $c;
    }
}

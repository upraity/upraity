class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function sumOfTheDigitsOfHarshadNumber($x) {
        $n = $x;
        $s = 0;
        while($n>0){
            $r = $n % 10;
            $s = $s + $r;
            $n = (int)($n / 10);
        }
        if($x % $s == 0) return $s;
        else return '-1';

    }
}

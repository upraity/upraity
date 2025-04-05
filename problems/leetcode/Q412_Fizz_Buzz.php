class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $arr = [];
        for($i=1;$i<=$n;$i++){
            if( $i % 3 == 0 && $i % 5 == 0) $arr[] = 'FizzBuzz';
            elseif($i % 3 == 0) $arr[] = 'Fizz';
            elseif($i % 5 == 0) $arr[] = 'Buzz';
            else $arr[] = "$i";
        }
        return $arr;
    }
}

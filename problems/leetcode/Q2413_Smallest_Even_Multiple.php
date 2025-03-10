class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function smallestEvenMultiple($n) {
      if(is_float($n/2)) return $n * 2;
        else return $n/2*2; 
    }
}

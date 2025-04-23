class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function digitSum($s, $k) {
        while (strlen($s) > $k) {  
            $groups = str_split($s, $k);  
            $s = '';
            foreach ($groups as $g) {
                $sum = array_sum(str_split($g)); 
                $s .= $sum; 
            }
        }
        return $s;
    }
}

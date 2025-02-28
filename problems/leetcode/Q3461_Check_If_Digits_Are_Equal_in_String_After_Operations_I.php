class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function hasSameDigits($s) {
        $arr = str_split($s);
        while(count($arr)>2){
            $r = [];
            for($i=0;$i<count($arr)-1;$i++){
                $n = ($arr[$i] + $arr[$i+1])  % 10; 
                $r[] = $n;
            }
            $arr = $r;
        }
        if($arr[0] != $arr[1]) return false;
        else return true;
    }
}

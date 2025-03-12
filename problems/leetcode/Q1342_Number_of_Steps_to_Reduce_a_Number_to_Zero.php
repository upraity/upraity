class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num) {
        $a = $num;
        $c=0;
        while($a>0){
            if($a%2==0){    
                $a=$a/2;  
                $c++;
            }
            else{
                $a -= 1;
                $c++;
            }
        }
        return $c;
    }
}

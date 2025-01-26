class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $result = [];
        for ($i = 0; $i <= $n; $i++) {
            $binary = decbin($i); 
            $result[] = substr_count($binary, '1'); 
        }
        return $result;
        
        // $result = [];
        // for ($i = 0; $i <= $n; $i++) {
        //     $binary = decbin($i);
        //     $result[] = array_sum(str_split($binary)); 
        // }
        // return $result;

        // $result = [];
        // for($i=0;$i<=$n;$i++){
        //     $b = decbin($i);
        //     if(strlen($b)>1){
        //         $s=0;
        //         for($j=0;$j<strlen($b);$j++)
        //             $s+=(int)$b[$j];
        //         $result[] = $s;
        //     }
        //     else
        //         $result[] = (int)$b;
        // }    
        // return $result;
    }
}

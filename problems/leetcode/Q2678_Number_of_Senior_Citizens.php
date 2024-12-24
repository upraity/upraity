class Solution {

    /**
     * @param String[] $details
     * @return Integer
     */
    function countSeniors($details) {
        foreach($details as $v){
            $r=substr($v, -4,2);
            $t[] = $r;
        }

        $c=0;
        foreach($t as $result){
            if($result>60){
                $c++;
            }
        }
        return $c  ;
    }
}

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function arrayRankTransform($arr) {
        if (empty($arr)) return $arr;
        $s = $arr;
        sort($s);
        $uni = array_values(array_uni($s));
        $r = [];
        for ($i = 0; $i < count($uni); $i++) {
            $r[$uni[$i]] = $i + 1; 
        }

        $rs = [];
        foreach ($arr as $v) {
            $rs[] = $r[$v]; 
        }

        return $rs;
    }
}

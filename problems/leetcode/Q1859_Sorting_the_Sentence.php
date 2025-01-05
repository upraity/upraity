class Solution {

    /**
     * @param String $s
     * @return String
     */
    function sortSentence($s) {
        preg_match_all('/\d+/', $s, $m);
        $n=$m[0];
        $st = preg_replace('/\d+/', '', $s);
        $w = explode(' ', $st);
        // $f =[];
        foreach($n as $key => $num){
            $f[$num] = $w[$key];
        }
        for($i=1; $i<=str_word_count($s);$i++){
            $result .= $f[$i] ." ";

        }
            return trim($result);
    }
}

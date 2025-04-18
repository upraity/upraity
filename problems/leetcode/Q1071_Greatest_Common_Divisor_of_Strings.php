<?php

class Solution {



    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */

    private function gcd($a, $b) {
        return $b == 0 ? $a : $this->gcd($b, $a % $b);
    }
    
    function gcdOfStrings($str1, $str2) {
        if ($str1 . $str2 !== $str2 . $str1) {
            return "";
        }

        $gcdLength = $this->gcd(strlen($str1), strlen($str2));
        return substr($str1, 0, $gcdLength);
    }
}

?>

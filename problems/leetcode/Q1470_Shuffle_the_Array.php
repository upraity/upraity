class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $nums1 = [];
        $nums2 = [];
        $num = [];
        for($i=0;$i<$n;$i++){
            $nums1[] = $nums[$i];
        }
        for($i=$n;$i<2*$n;$i++){
            $nums2[] = $nums[$i];
        }
        for($i=0;$i<$n;$i++){
            $num[] = $nums1[$i];
            $num[] = $nums2[$i];
        }
        return $num;
    }
}

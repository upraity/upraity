class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
                // $r = array_merge($nums1, $nums2);
        // sort($r);
        // $c = count($r);
        // $m = ($c/2);
        // print_r($r);
        // if ($c % 2 == 0)
        //     $median = ($r[$m - 1] + $r[$m]) / 2;
        // else 
        //     $median = $r[$m];
        // return $median;
        $r = array_merge($nums1, $nums2);
        sort($r);
        $c = count($r);
        return ($c % 2 == 0) ? ($r[$c / 2 - 1] + $r[$c / 2]) / 2 : $r[$c / 2];
    }
}

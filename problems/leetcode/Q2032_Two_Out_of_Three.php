class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer[] $nums3
     * @return Integer[]
     */
    function twoOutOfThree($nums1, $nums2, $nums3) {
        $nums1 = array_unique($nums1);
        $nums2 = array_unique($nums2);
        $nums3 = array_unique($nums3);
        $nums = array_merge($nums1, $nums2, $nums3);
        $count = array_count_values($nums);
        $arr = [];
        foreach($count as $c => $key){
            if($key>=2) $arr[] = $c;
        }
        return $arr;
    }
}

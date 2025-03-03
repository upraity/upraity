class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2) {
        $a = array_unique($nums1);
        $b = array_unique($nums2);
        $unique1 = array_unique(array_diff($nums1, $nums2));
        $unique2 = array_unique(array_diff($nums2, $nums1));
        return [$unique1, $unique2];
    }
}

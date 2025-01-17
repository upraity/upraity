class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $u = array_unique($nums);
        $c1 = count($nums);
        $c2 = count($u);
        if($c1!=$c2) return true;
        else return false;
    }
}

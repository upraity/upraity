class Solution {

    /**
     * @param Integer[][] $nums
     * @return Integer[]
     */
    function intersection($nums) {
        if (empty($nums)) return [];
        $common = call_user_func_array('array_intersect', $nums);
        sort($common);
        return array_values($common); 
    }
}

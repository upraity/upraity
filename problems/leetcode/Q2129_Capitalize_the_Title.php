class Solution {

    /**
     * @param String $title
     * @return String
     */
    function capitalizeTitle($title) {
        $new = strtolower($title);
        $words = explode(' ', $new);

        foreach ($words as &$word) {
            if (strlen($word) > 2) {
                $word = ucfirst($word); 
            }
        }
        return implode(' ', $words);
    }
}

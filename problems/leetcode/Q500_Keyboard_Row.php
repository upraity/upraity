class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $a = ['q','w','e','r','t','y','u','i','o','p','Q','W','E','R','T','Y','U','I','O','P'];
        $b = ['a','s','d','f','g','h','j','k','l','A','S','D','F','G','H','J','K','L'];
        $c = ['z','x','c','v','b','n','m','Z','X','C','V','B','N','M'];

        $result=[];

        foreach($words as $word){
            $char = str_split($word);

            if(in_array($char[0], $a))  $row = $a;
            elseif(in_array($char[0], $b))  $row = $b;
            elseif(in_array($char[0], $c))  $row = $c;
            else continue;

            $same = true;
            foreach($char as $ch){
                if(!in_array($ch, $row)){
                    $same = false;
                    break;
                }
            }
            if($same){
                $result[] = $word;
            }
        }
        return $result;
    }
}

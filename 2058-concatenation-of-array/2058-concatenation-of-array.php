class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[] $ans
     */
    function getConcatenation($nums) {
        $ans = array_merge($nums,$nums);
       return $ans;
        
    }
}
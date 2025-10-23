class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer [] $ans
     */
    function differenceOfSum($nums) {
        
        $elementsum =  array_sum($nums);
        
        foreach ($nums as $Value)
        {
        $digitsum += array_sum(str_split($Value));
  
  }

  return ($elementsum - $digitsum);
        
        
    }
}
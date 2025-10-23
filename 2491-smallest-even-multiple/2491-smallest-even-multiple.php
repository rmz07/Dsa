class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function smallestEvenMultiple($n) {

        $i= $n;

        while($i>0){
            if($i%2 ===0 AND $i%$n ===0){
            return $i;
            }
            $i++;
        }
        
        
        
    }
}
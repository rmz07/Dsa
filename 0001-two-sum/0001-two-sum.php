class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = []; // to store numbers with their indices

        foreach ($nums as $i => $num) {
            $complement = $target - $num;

            if (isset($map[$complement])) {
                return [$map[$complement], $i]; // found the pair
            }

            $map[$num] = $i; // store the current number and its index
        }

        // If no solution (though problem guarantees one)
        return [];
    }
}

// Example usage:
$solution = new Solution();

print_r($solution->twoSum([2, 7, 11, 15], 9));   // Output: [0, 1]
print_r($solution->twoSum([3, 2, 4], 6));        // Output: [1, 2]
print_r($solution->twoSum([3, 3], 6));           // Output: [0, 1]

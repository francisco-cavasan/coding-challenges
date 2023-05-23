<?php

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target)
    {
        foreach ($nums as $outterKey => $outterNumber) {
            foreach ($nums as $innerKey => $innerNumber) {
                if ($outterNumber + $innerNumber === $target && $outterKey !== $innerKey) {
                    return [$outterKey, $innerKey];
                }
            }
        }
    }
}

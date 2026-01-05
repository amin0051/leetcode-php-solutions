<?php
/**
 * Problem: Remove Duplicates from Sorted Array
 * LeetCode: https://leetcode.com/problems/remove-duplicates-from-sorted-array/
 * Language: PHP
 * Approach: Two Pointers (O(n) time, O(1) space)
 */

function removeDuplicates(&$nums) {
    $n = count($nums);
    if ($n == 0) return 0;

    $i = 0; // slow pointer

    for ($j = 1; $j < $n; $j++) {
        if ($nums[$j] != $nums[$i]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }

    return $i + 1; // new length
}

/* ---------- Test ---------- */
$nums = [0,0,1,1,1,2,2,3,3,4];
$newLength = removeDuplicates($nums);

echo "New length: $newLength\n";
echo "Array after removing duplicates: ";
print_r(array_slice($nums, 0, $newLength));

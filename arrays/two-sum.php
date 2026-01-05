<?php
/**
 * Problem: Two Sum
 * LeetCode: https://leetcode.com/problems/two-sum/
 * Language: PHP
 * Approach: Hash Map (O(n))
 */

function twoSum($nums, $target) {
    $map = [];

    foreach ($nums as $index => $value) {
        $needed = $target - $value;

        if (isset($map[$needed])) {
            return [$map[$needed], $index];
        }

        $map[$value] = $index;
    }

    return [];
}

/* ---------- Test ---------- */
$nums = [2, 7, 11, 15];
$target = 9;

print_r(twoSum($nums, $target));

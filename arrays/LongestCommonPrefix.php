<?php
/**
 * Problem: Longest Common Prefix
 * LeetCode: https://leetcode.com/problems/longest-common-prefix/
 */

class Solution
{
    public function longestCommonPrefix(array $strs): string
    {
        $total = count($strs);

        if ($total === 0) {
            return "";
        }

        $prefix = "";
        $firstLength = strlen($strs[0]);

        for ($i = 0; $i < $firstLength; $i++) {

            $currentChar = $strs[0][$i];

            for ($j = 1; $j < $total; $j++) {

                if (!isset($strs[$j][$i]) || $strs[$j][$i] !== $currentChar) {
                    return $prefix;
                }
            }

            $prefix .= $currentChar;
        }

        return $prefix;
    }
}

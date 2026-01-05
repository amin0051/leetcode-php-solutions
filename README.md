# LeetCode PHP Solutions (Docker)

## Problems included
1. Two Sum
   - Language: PHP
   - LeetCode: https://leetcode.com/problems/two-sum/
   - Output:
     ```
     Array
     (
         [0] => 0
         [1] => 1
     )
     ```

2. Remove Duplicates from Sorted Array
   - Language: PHP
   - LeetCode: https://leetcode.com/problems/remove-duplicates-from-sorted-array/
   - Output:
     ```
     New length: 5
     Array after removing duplicates: Array
     (
         [0] => 0
         [1] => 1
         [2] => 2
         [3] => 3
         [4] => 4
     )
     ```

## Run with Docker
```bash
docker compose up -d
docker compose exec php php arrays/two-sum.php
docker compose exec php php arrays/remove-duplicates.php

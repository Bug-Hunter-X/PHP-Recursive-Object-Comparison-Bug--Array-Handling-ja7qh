# PHP Recursive Object Comparison Bug

This repository demonstrates a common bug encountered when recursively comparing objects in PHP.  The provided code attempts to perform a deep comparison of two objects, but it fails to handle arrays correctly.  The `bug.php` file contains the buggy code, while `bugSolution.php` offers a corrected version.

## Bug Description
The original code uses a recursive approach to compare objects, but it incorrectly handles arrays.  The comparison incorrectly returns `false` even if the arrays have identical content. This behavior leads to unexpected results and errors in applications where deep object comparison is needed.

## Solution
The solution involves implementing a more robust comparison function that explicitly handles arrays. This revised function correctly handles both objects and arrays, providing an accurate deep comparison.
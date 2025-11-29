<?php
/**
 * Linear Search Implementation in PHP
 * Filename: linear_search.php
 * 
 * This program demonstrates the Linear Search algorithm,
 * which searches for a target value by checking each element
 * in the array sequentially from start to end.
 */

/**
 * Linear Search Function
 * 
 * Algorithm:
 * 1. Start from the first element (index 0)
 * 2. Compare each element with the target value
 * 3. If match is found, return the index
 * 4. If end of array is reached without finding the target, return -1
 * 
 * Time Complexity: O(n) - where n is the number of elements
 * Space Complexity: O(1) - uses constant extra space
 * 
 * @param array $array - The array to search through
 * @param mixed $target - The value to search for
 * @return int - The index where target is found, or -1 if not found
 */
function linearSearch($array, $target) {
    // Get the length of the array
    $length = count($array);
    
    // Loop through each element in the array
    for ($i = 0; $i < $length; $i++) {
        // Check if current element matches the target
        if ($array[$i] == $target) {
            // Target found! Return the current index
            return $i;
        }
    }
    
    // If we reach here, target was not found in the array
    return -1;
}

// ============ MAIN PROGRAM ============

// Create an array with at least 10 elements
$numbers = array(15, 42, 8, 23, 16, 4, 25, 31, 19, 7, 50, 12);

// Display the array contents
echo "Array contents: [" . implode(", ", $numbers) . "]\n";
echo str_repeat("-", 50) . "\n";

// Prompt user for input
echo "Enter value to search: ";

// Read user input from command line
$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));
fclose($handle);

// Convert input to integer for numeric comparison
$searchValue = is_numeric($input) ? (int)$input : $input;

// Perform linear search
$result = linearSearch($numbers, $searchValue);

// Display the result
if ($result != -1) {
    echo "$searchValue found at index $result.\n";
} else {
    echo "$searchValue not found in the array.\n";
}

echo str_repeat("-", 50) . "\n";
echo "Search completed.\n";
?>

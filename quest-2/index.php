<?php
/*
2. Logic Test
Write a PHP program that pushes half of the zeros in a given array to the beginning of the array, and the other half to the end.
Examples 1:
Input: [3,5,6,0,7,0,1]
Output: [0,3,5,6,7,1,0]
Examples 2:
Input: [5,0,0,6,0,8]
Output: [0,0,5,6,8,0]
Examples 3:
Input: [1,2,3,0,0,0,0]
Output: [0,0,1,2,3,0,0]
Examples 4:
Input: [1,2,3]
Output: [1,2,3]
function transformedArray(array $inputArray) : array {
//your code here
}
*/

function transformedArray(array $inputArray): array
{

    $count = count($inputArray);

    $odd = true;
    $addBeforeArray = [];

    for ($i = 0; $i < $count; $i++) {


        if ($inputArray[$i] === 0) {

            unset($inputArray[$i]);

            if ($odd === true) {
                $odd = false;
                $addBeforeArray[] = 0;
            } else {
                $odd = true;
                $inputArray[] = 0;
            }


        }

    }

    array_unshift($inputArray, $addBeforeArray);

    return array_values($inputArray);
}




$array = [3, 5, 6, 0, 7, 0, 1];
$array = [
    3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3,
    5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0,
    1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0,
    7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6,
    0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5,
    6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1, 3,
    5, 6, 0, 7, 0, 1, 3, 5, 6, 0, 7, 0, 1
];

echo '<br><br><br>';
$start = microtime(true);

for ($i = 0; $i < 100000; $i++) {
    transformedArray($array);
}


$diff = microtime(true) - $start;
$diff = sprintf('%.6F sec.', $diff);

echo "Time: $diff";


$array2 = [5, 0, 0, 6, 0, 8];
$array3 = [1, 2, 3, 0, 0, 0, 0];
$array4 = [1, 2, 3];

echo '<br><br><br>';
print_r(transformedArray($array2));
echo '<br><br><br>';
print_r(transformedArray($array3));
echo '<br><br><br>';
print_r(transformedArray($array4));

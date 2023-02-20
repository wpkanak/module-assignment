<?php


// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

function sort_strings_length($arr) {
    usort($arr, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}


$arr = array("apple", "banana", "orange", "grapefruit");
$sorted_arr = sort_strings_length($arr);
print_r($sorted_arr);




// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function result_concat_sortings($sort1, $sort2) {
    return substr($sort1, 0, strlen($sort1) - strlen($sort2)) . strrev($sort2);
}

$sort1 = "hello world";
$sort2 = "friend";
$result = result_concat_sortings($sort1, $sort2);
echo $result; 


// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function remove_first_last($arr) {
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$arr = array(1, 2, 3, 4, 5);
$new_arr = remove_first_last($arr);
print_r($new_arr); 



// 4.Write a PHP function to check if a string contains only letters and whitespace.

function letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}


$str1 = "Hello world";
$str2 = "Hello123";
$result1 = letters_and_whitespace($str1);
$result2 = letters_and_whitespace($str2);
echo $result1; 
echo $result2;


// 5.Write a PHP function to find the second largest number in an array of numbers.


function second_largest_number($arr) {
    $max = $arr[0];
    $second_max = null;
    foreach ($arr as $num) {
        if ($num > $max) {
            $second_max = $max;
            $max = $num;
        } elseif ($num != $max && ($second_max === null || $num > $second_max)) {
            $second_max = $num;
        }
    }
    return $second_max;
}
$arr = array(3, 5, 1, 9, 7, 8);
$second_largest_num = second_largest_number($arr);
echo $second_largest_num;
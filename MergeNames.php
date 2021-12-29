<?php
/*
 * Implement the unique_names function. When passed two arrays of names,
 * it will return an array containing the names that appear in either or both arrays.
 * The returned array should have no duplicates.

For example, calling unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']) should return ['Emma', 'Olivia', 'Ava', 'Sophia'] in any order.
 */


function unique_names(array $array1, array $array2): array
{
    $uniqueNames = $array1;
    for($i = 0; $i < count($array2); $i++){
        if(!in_array($array2[$i], $uniqueNames)){
            array_push($uniqueNames, $array2[$i]);
        }
    }
    return array_unique($uniqueNames);

}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
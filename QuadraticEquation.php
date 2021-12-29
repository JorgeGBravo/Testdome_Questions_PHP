<?php
/*
 * Implement the function findRoots to find the roots of the quadratic equation: ax2 + bx + c = 0.
 * The function should return an array containing both roots in any order.
 * If the equation has only one solution, the function should return that solution as both elements of the array.
 * The equation will always have at least one solution.

The roots of the quadratic equation can be found with the following formula: A quadratic equation.

For example, findRoots(2, 10, 8) should return [-1, -4] or [-4, -1] as the roots of the equation 2x2 + 10x + 8 = 0 are -1 and -4.
 */


/**
 * @return array An array of two elements containing roots in any order
 */
function findRoots($a, $b, $c)
{
    $solutions= [];
    $negativeB = -($b);
    $b2 = pow($b, 2);
    $aC = 4 * $a * $c;
    $aSub = 2 * $a;

    $raiz = sqrt(($b2 - $aC));
    $xNegative = ($negativeB - $raiz)/$aSub;
    array_push($solutions, $xNegative);
    $xPositive = ($negativeB + $raiz)/$aSub;
    array_push($solutions, $xPositive);


    return $solutions;
}

print_r(findRoots(2, 10, 8));
<?php
/*
 * As part of a data processing pipeline, complete the implementation of the make_pipeline method:

The method should accept a variable number of functions, and it should return a new function that accepts one parameter $arg.

The returned function should call the first function in the make_pipeline with the parameter $arg, and call the second function with the result of the first function.

The returned function should continue calling each function in the make_pipeline in order, following the same pattern, and return the value from the last function.

For example, make_pipeline(function($x) { return $x * 3; }, function($x) { return $x + 1; }, function($x) { return $x / 2; })
then calling the returned function with 3 should return 5.
 */


function make_pipeline(...$funcs): Closure
{
    $args       =   func_get_args();
    $function   =   function($arg) use ($args){
        foreach($args as $function) {
            if(!isset($value))
                $value  =   $function($arg);
            else
                $value  =   $function($value);
        }
        return $value;
    };
    return $function;
}

$fun = make_pipeline(function ($x) {
    return $x * 3;
},
    function ($x) {
        return $x + 1;
    },
    function ($x) {
        return $x / 2;
    });
echo $fun(3); # should print 5
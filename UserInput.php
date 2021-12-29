<?php

/*
 * The user interface contains two types of user input controls: TextInput, which accepts all texts and NumericInput, which accepts only digits.

Implement the class TextInput that contains:

Public function add($text) - adds the given text to the current value.
Public function getValue() - returns the current value (string).
Implement the class NumericInput that:

Inherits from TextInput.
Overrides the add method so that each non-numeric text is ignored.
For example, the following code should output '10':

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
 */

/**
 * @property  class
 */
class TextInput
{
    public $String= '';
    public function add($input)
    {
        $this->String=$this->String.$input;
        return $this->String;
    }
    public function getValue()
    {
        return $this->String;

    }
}

class NumericInput extends  TextInput
{
    function add($input)
    {

        if( preg_match('/^\d+$/',$input)){
            $this->String=$this->String.$input;
        }


    }
}

//$input = new NumericInput();
//$input->add('1');
//$input->add('a');
//$input->add('0');
//echo $input->getValue();


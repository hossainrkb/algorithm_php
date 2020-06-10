<?php

namespace Stack;

class Balanced_parentheses
{
    public $balanced_array = [];

    public $top = -1;

    public function balanced_paren_function($value)
    {
        if (($value == "(") || ($value == "{") || ($value == "[")) {
            $this->top++;
            $this->balanced_array[$this->top] = $value;
        } elseif (($value == ")") || ($value == "}") || ($value == "]")) {
            // dd($this->balanced_array[$this->top] . "   " . $value);
            if ((count($this->balanced_array) == 0) ||
                (($this->balanced_array[$this->top] == "(") && ($value == ")") == false) ||
                (($this->balanced_array[$this->top] == "{") && ($value == "}") == false) ||
                (($this->balanced_array[$this->top] == "[") && ($value == "]") == false)
            ) {
                dd("not true");
            } else {
                array_splice($this->balanced_array, $this->top, 1);
                $this->top--;
                // dd("balanced");
            }
        }
        if (count($this->balanced_array) == 0) {
            dd("blanced");
        }
        // dump("@array " . implode(", ", $this->balanced_array));
        // count($this->balanced_array) == 0 ? dd("balanced") : dd("not balanced");
    }
}

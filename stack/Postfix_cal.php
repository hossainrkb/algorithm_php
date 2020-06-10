<?php

namespace Stack;

class Postfix_cal
{
    public $postfix = [];

    public $top = -1;

    public function postfix_cal_func($value)
    {
        // 2 3 * 5 4 * + 9 -

        if (is_numeric($value)) {
            $this->top++;
            $this->postfix[$this->top] = $value;
        } else {
            if (($value == "*") && count($this->postfix) > 1) {
                $value1 = array_splice($this->postfix, $this->top, 1);
                // dump("@value 1  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $value2 = array_splice($this->postfix, $this->top - 1, 1);
                // dump("@value 2  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $mul = implode("", $value1) * implode("", $value2);
                if (count($this->postfix) > 0) {
                    $this->top = count($this->postfix) - 1;
                } else {
                    $this->top = -1;
                }
                // array_values($this->postfix);
                $this->top++;
                $this->postfix[$this->top] = $mul;
                // dump("@final  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                // array_values($this->postfix);
            }
            if (($value == "-") && count($this->postfix) > 1) {
                $value1 = array_splice($this->postfix, $this->top, 1);
                // dump("@value 1  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $value2 = array_splice($this->postfix, $this->top - 1, 1);
                // dump("@value 2  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $sub = implode("", $value1) - implode("", $value2);
                if (count($this->postfix) > 0) {
                    $this->top = count($this->postfix) - 1;
                } else {
                    $this->top = -1;
                }
                // array_values($this->postfix);
                $this->top++;
                $this->postfix[$this->top] = $sub;
                // dump("@final  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                // array_values($this->postfix);
            }
            if (($value == "+") && count($this->postfix) > 1) {
                $value1 = array_splice($this->postfix, $this->top, 1);
                // dump("@value 1  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $value2 = array_splice($this->postfix, $this->top - 1, 1);
                // dump("@value 2  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $add = implode("", $value1) + implode("", $value2);
                if (count($this->postfix) > 0) {
                    $this->top = count($this->postfix) - 1;
                } else {
                    $this->top = -1;
                }
                // array_values($this->postfix);
                $this->top++;
                $this->postfix[$this->top] = $add;
                // dump("@final  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                // array_values($this->postfix);
            }
            if (($value == "/") && count($this->postfix) > 1) {
                $value1 = array_splice($this->postfix, $this->top, 1);
                // dump("@value 1  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $value2 = array_splice($this->postfix, $this->top - 1, 1);
                // dump("@value 2  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                $div = implode("", $value1) / implode("", $value2);
                if (count($this->postfix) > 0) {
                    $this->top = count($this->postfix) - 1;
                } else {
                    $this->top = -1;
                }
                // array_values($this->postfix);
                $this->top++;
                $this->postfix[$this->top] = $div;
                // dump("@final  array : " . implode(" ", $this->postfix) . " top : " . $this->top);
                // array_values($this->postfix);
            }
        }
        if (count($this->postfix) == 1) {
            dump($this->postfix);
            // dump("@final " . implode(", ", $this->postfix));
        }
    }
}

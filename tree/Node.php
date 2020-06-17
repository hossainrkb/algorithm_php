<?php
namespace Tree;

class Node{
    public $value;
    public $left;
    public $right;
    public function __construct()
    {
        $this->value=0;
        $this->left = null;
        $this->right = null;
    }
    public function getValue(){
       return $this->value ;
    }
    public function setValue($value){
        $this->value = $value;
    }
    public function getleft(){
        return $this->left;
    }
    public function setleft($leftValue){
        $this->left = $leftValue;
    }
      public function getright(){
        return $this->right;
    }
    public function setright($rightValue){
        $this->right = $rightValue;
    }
}
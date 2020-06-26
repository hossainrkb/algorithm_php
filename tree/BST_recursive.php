<?php 
namespace Tree;

class BST_recursive{
    public $root;
    public function __construct($value) {
        $newNode = new Node();
        $newNode->setValue($value);
        $this->root = $newNode;
    }

    public function serach_tree($value,$node){
        $current_node = $node;
        $newNode = new Node();
        $newNode->setValue($value);
        if ($value < $current_node->getValue()) {
        // if no left child, append new node
        if (!$current_node->getleft()) {
   $current_node->setleft($newNode);
}
            else{
                $this->serach_tree($value,$current_node->getleft());
            }
            }
            else{
                if (!$current_node->getright()) {
    $current_node->setright($newNode);
} else {
    $this->serach_tree($value, $current_node->getright());
}
            }
       
  
    }

    public function insert($value){
        $this->serach_tree($value,$this->root);
    }
       public function tree_output() {
        echo (json_encode($this->root));
    }
}
<?php

namespace Tree;

use Tree\Node;

class BST_iterative {
    public $root;
    public function __construct($value) {
        $newNode = new Node();
        $newNode->setValue($value);
        $this->root = $newNode;
    }
    public function insert($value) {
        $newNode = new Node();
        $newNode->setValue($value);
        if ($this->root) {
            $currentNode = $this->root;
            if ($currentNode->getValue() > $value) {
                if (!$currentNode->getleft()) {
                    $currentNode->setleft($newNode);
                } else {
                    while ($currentNode->getleft() !== Null) {

                        if ($currentNode->getValue() > $value) {
                            $currentNode = $currentNode->getleft();
                        } else {
                            if ($currentNode->getright() == null) {
                                $currentNode->setright($newNode);
                                $currentNode = $newNode;

                                break;
                            } else {
                                $currentNode = $currentNode->getright();
                            }
                        }
                    }

                    if ($currentNode->getValue() > $value) {

                        while ($currentNode->getleft() !== Null) {
                            $currentNode = $currentNode->getleft();
                        }
                        $currentNode->setleft($newNode);
                    } else {
                        while ($currentNode->getright() !== Null) {
                            $currentNode = $currentNode->getright();
                        }
                        if ($currentNode->getValue() < $value) {
                            $currentNode->setright($newNode);
                        }
                    }
                }
            } else {
                if (!$currentNode->getright()) {
                    $currentNode->setright($newNode);
                } else {
                   while ($currentNode->getright() !== Null) {

                        if ($currentNode->getValue() < $value) {
                            $currentNode = $currentNode->getright();
                        } else {
                            if ($currentNode->getleft() == null) {
                                $currentNode->setleft($newNode);
                                $currentNode = $newNode;
                                break;
                            } else {
                                $currentNode = $currentNode->getleft();
                            }
                        }
                    }

                    if ($currentNode->getValue() < $value) {

                        while ($currentNode->getright() !== Null) {
                            $currentNode = $currentNode->getright();
                        }
                        $currentNode->setright($newNode);
                    } else {
                        while ($currentNode->getright() !== Null) {
                            $currentNode = $currentNode->getright();
                        }
                        if ($currentNode->getValue() < $value) {
                            $currentNode->setleft($newNode);
                        }
                    }
                }
            }
        } else {
            $this->root = $newNode;
        }
    }
    public function tree_output() {
        echo (json_encode($this->root));
    }
}

<?php
namespace Link_list;
use Link_list\Node;

class LinkList {
    public $head;
    public function __construct() {
        $this->head = null;
    }
    public function insertAtback($data) {
        $newNode = new Node;
        $newNode->setData($data);
        if ($this->head) {
            $current_node = $this->head;
            // echo (json_encode($current_node));
            // dd("heelo");
            while ($current_node->getNext() != null) {
                $current_node = $current_node->getNext();
            }
            $current_node->setNext($newNode);
        } else {
            $this->head = $newNode;
        }
    }
    public function insertAtfront($data) {
        $newNode = new Node;
        $newNode->setData($data);
        if ($this->head) {
            $newNode->setNext($this->head);
            $this->head = $newNode;
        } else {
            $this->head = $newNode;
        }
    }
    public function insertAfterSpecificPosition($data, $target) {
        $newNode = new Node;
        $newNode->setData($data);
        if ($this->head) {
            $current_node = $this->head;
            while ($current_node->getdata() != $target && $current_node->getNext() != null) {
                $current_node = $current_node->getNext();
            }
            if ($current_node->getdata() == $target) {
                $current_node_next = $current_node->getNext();
                $current_node->setNext($newNode);
                $newNode->setNext($current_node_next);
            }

        }
    }
    public function insertBeforeSpecificPosition($data, $target) {

        $newNode = new Node;
        $newNode->setData($data);
        $prevNode = null;
        if ($this->head) {
            $current_node = $this->head;
            while ($current_node->getdata() != $target && $current_node->getNext() != null) {
                $prevNode = $current_node;
                $current_node = $current_node->getNext();
            }
            // dd($prevNode);
            if ($current_node->getdata() == $target) {
                $prevNode_next = $prevNode->setNext($newNode);
                // $current_node->setNext($newNode);
                $newNode->setNext($current_node);
            }

        }
    }
    public function brofest() {
        echo (json_encode($this->head));

    }
}

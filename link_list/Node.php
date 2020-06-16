<?php
namespace Link_list;

class Node {
    public $data;
    public $next;
    public function __construct() {
        $this->data = 0;
        $this->next = null;
    }
    public function setData($newData) {
        $this->data = $newData;
    }
    public function getData() {
        return $this->data;
    }
    public function setNext($newNext) {
        return $this->next = $newNext;
    }
    public function getNext() {
        return $this->next;
    }
}

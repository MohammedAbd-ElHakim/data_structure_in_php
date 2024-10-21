<?php
include_once 'AutoLoaded.php';

class NodeOfDoublyLinkedList
{
    public $data;
    public ?NodeOfDoublyLinkedList $next, $prev;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}
?>
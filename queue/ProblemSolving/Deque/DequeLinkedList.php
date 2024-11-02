<?php
include_once 'AutoLoaded.php';

class DequeLinkedList
{
    public ?NodeOfDeque $head;
    public function __construct(NodeOfDeque $head = null)
    {
        $this->head = $head;
    }
}
?>
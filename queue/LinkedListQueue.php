<?php
include_once 'Autoload.php';

class LinkedListQueue
{
    public ?NodeQueue $head;

    public function __construct(NodeQueue $node = null)
    {
        $this->head = $node;
    }
}

?>
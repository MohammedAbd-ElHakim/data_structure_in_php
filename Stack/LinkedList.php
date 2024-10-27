<?php
include_once 'Autoload.php';

class LinkedList
{
    public ?Node $head;

    public function __construct(Node $node = null)
    {
        $this->head = $node;
    }
}

?>
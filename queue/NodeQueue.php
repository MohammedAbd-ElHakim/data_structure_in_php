<?php
include_once 'Autoload.php';

class NodeQueue
{
    public $data;
    public ?NodeQueue $next;

    public function __construct($data = null)
    {
        $this->data = $data;
        $this->next = null;
    }
}
?>